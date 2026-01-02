<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nieuw Contactformulier</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #0a0a0a; color: #c4ff00; padding: 20px; text-align: center; }
        .content { padding: 20px; background: #f9f9f9; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #0a0a0a; }
        .value { margin-top: 5px; padding: 10px; background: #fff; border-left: 3px solid #c4ff00; }
        .footer { padding: 20px; text-align: center; font-size: 12px; color: #666; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>BCN Sports</h1>
            <p>Nieuw bericht via contactformulier</p>
        </div>

        <div class="content">
            <div class="field">
                <div class="label">Naam:</div>
                <div class="value">{{ $data['name'] }}</div>
            </div>

            <div class="field">
                <div class="label">E-mail:</div>
                <div class="value">{{ $data['email'] }}</div>
            </div>

            @if(!empty($data['phone']))
            <div class="field">
                <div class="label">Telefoon:</div>
                <div class="value">{{ $data['phone'] }}</div>
            </div>
            @endif

            <div class="field">
                <div class="label">Onderwerp:</div>
                <div class="value">{{ $data['subject'] }}</div>
            </div>

            <div class="field">
                <div class="label">Bericht:</div>
                <div class="value">{!! nl2br(e($data['message'])) !!}</div>
            </div>
        </div>

        <div class="footer">
            <p>Dit bericht is verzonden via het contactformulier op bcnsports.nl</p>
        </div>
    </div>
</body>
</html>
