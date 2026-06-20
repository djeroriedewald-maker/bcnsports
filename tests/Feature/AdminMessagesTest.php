<?php
namespace Tests\Feature;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\ContactMessage;
use App\Models\User;

class AdminMessagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_messages_index_renders()
    {
        $u = User::factory()->create();
        ContactMessage::create(['name'=>'A','email'=>'a@b.nl','subject'=>'s','message'=>'m','status'=>'new']);
        $this->actingAs($u)->get('/admin/messages')
            ->assertOk()
            ->assertSee('Selecteer alle berichten op deze pagina');
    }

    public function test_show_message_ok_and_marks_read()
    {
        $u = User::factory()->create();
        $m = ContactMessage::create(['name'=>'A','email'=>'a@b.nl','subject'=>'kennismaking','message'=>"hi\nthere",'status'=>'new']);
        $this->actingAs($u)->get("/admin/messages/{$m->id}")->assertOk();
        $this->assertEquals('read', $m->fresh()->status);
    }

    public function test_bulk_delete_removes_selected()
    {
        $u = User::factory()->create();
        $a = ContactMessage::create(['name'=>'A','email'=>'a@b.nl','subject'=>'s','message'=>'m','status'=>'new']);
        $b = ContactMessage::create(['name'=>'B','email'=>'b@b.nl','subject'=>'s','message'=>'m','status'=>'new']);
        $c = ContactMessage::create(['name'=>'C','email'=>'c@b.nl','subject'=>'s','message'=>'m','status'=>'new']);
        $this->actingAs($u)->post('/admin/messages/bulk', ['action'=>'delete','ids'=>[$a->id,$b->id]]);
        $this->assertNull(ContactMessage::find($a->id));
        $this->assertNull(ContactMessage::find($b->id));
        $this->assertNotNull(ContactMessage::find($c->id));
    }
}
