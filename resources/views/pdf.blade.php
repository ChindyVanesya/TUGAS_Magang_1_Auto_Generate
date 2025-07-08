<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generate Asset</title>
    <style>
           @page {
            size: A4;
            margin: 6mm;
        }
    </style>
</head>
<body>
 
    <table style="border-spacing: 12px; border-collapse: separate; font-family: 'Courier New', Courier, monospace;">
        @foreach ($data as $index => $item )
        @if ($index % 4 ==0)
        
        <tr style="background: #d4af37; ">
        @endif

        <td style=" width: 4.500cm; height: 1.2cm; vertical-align: bottom;">
                <div style="padding:11px 0px -1px 10px;   ">
             <img src="{{ $item['qr'] }}"alt="QR Code" style="width: 0.8cm;height:0.8cm ; background: white; padding: 5px; margin-top: 5px; ">
            <span style="font-weight: 800; vertical-align: middle; display: inline-block; margin-left: 5px; margin-top: -1px;">{{ $item['kode'] }}</span>
        </div>
            </td>
            @if ($index % 4 ==3)
        </tr>
        
        @endif
        @endforeach
    </table>
</body>
</html>