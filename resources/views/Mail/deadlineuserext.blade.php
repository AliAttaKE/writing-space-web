<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>

<body>
<br><br>
<table style="line-height:1.3em;color:#232323;font-family:Arial,sans-serif;overflow:hidden;width:100%;border-radius:5px;border:none;font-size:14px;margin:auto;">
    <tbody>
    <tr>
        <td>
            <table style="width: 70%; background: white;margin: 50px auto;padding: 50px;    border-radius: 5px; box-shadow: 0 0 7px 1px grey;    border: 5px solid #eaeaea4d;border-right: 5px solid black;background-color: black;">
                <tbody>
                <tr>
                    <td>
                        <table width="100%" >
                            <tr>
                                <td colspan="2" style="text-align: center;">
                                    <a target="_blank" href="wms.eliteblue.net" style="text-decoration: none">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="{{asset('/management/images/load.png')}}" style="width: 232px; height: auto;" class="img-logos"  >
                                    </a>
                                </td>
                            </tr>
                        </table>
                        <table cellspacing="0" cellpadding="0" width="100%" style="font-family:Arial,sans-serif;line-height:1.3em;margin:15px 0;overflow:hidden;width:100%;background:#f7f7f7;color:black;border-radius:4px;border-bottom:1px dotted #c9c9c9;border-left:1px dotted #c9c9c9;border-right:1px dotted #c9c9c9">
                            <thead>
                            <tr style="font-family:Arial,sans-serif;line-height:1.3em">
                                <td style="vertical-align:middle;word-wrap:break-word;padding:15px 12px;font-family:Arial,sans-serif;text-align:left;text-transform:capitalize;font-size:14px;font-weight:normal;padding-top:7px;padding-bottom:7px;margin:0;line-height:1.4em;border-top:1px dotted #c9c9c9">
                                    <p> Order ID : {{($details['data']['order']['id'])}} </p>
                                    <p> Title : {{($details['data']['order']['erp_subject_name'])}} </p>
                                    @if($details['data']['type'] == 'bid')
                                        <p> Previous deadline : {{($details['data']['previoususer'])}} </p>
                                    @else
                                    <p>Previous deadline : {{($details['data']['previousclient'])}} </p>
                                    @endif
                                    <p>Requested Deadline : {{($details['data']['new'])}} </p>

                                    <p> Description :{!!  ($details['data']['order']['erp_order_message']) !!}</p>

                                </td>

                            </tr>
                            </thead>
                        </table>
                    </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <td>
                        <table  style="margin: auto">
                            <tbody style="margin: auto">
                            <tr>
                                <td style="text-align: center">
                                    <a target="_blank" href><img title="Facebook" src="{{asset('/management/images/email/facebook.png')}}" alt="Fb" width="32"></a>
                                    <a target="_blank" href><img title="Twitter" src="{{asset('/management/images/email/instagram.png')}}" alt="Tw" width="32"></a>
                                    <a target="_blank" href><img title="Instagram" src="{{asset('/management/images/email/twitter.png')}}" alt="Inst" width="32"></a>
                                </td>
                            </tr>
                            <tr style="text-align: center">
                                <p style="color:black;font-size:12px;">© COPYRIGHT 2021 ALL RIGHTS RESERVED WMS POWERED BY ELITEBLUE TECHNOLOGIES </p>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tfoot>
            </table>
</table>




</body>
</html>



