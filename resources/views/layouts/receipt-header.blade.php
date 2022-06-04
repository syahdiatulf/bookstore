<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Invoice with ribbon - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <style type="text/css">
        body{margin-top:20px;
        background:#eee;
        }

        /*Invoice*/
        .invoice .top-left {
            font-size:65px;
            color:#3ba0ff;
        }

        .invoice .top-right {
            text-align:right;
            padding-right:20px;
        }

        .invoice .table-row {
            margin-left:-15px;
            margin-right:-15px;
            margin-top:25px;
        }

        .invoice .payment-info {
            font-weight:500;
        }

        .invoice .table-row .table>thead {
            border-top:1px solid #ddd;
        }

        .invoice .table-row .table>thead>tr>th {
            border-bottom:none;
        }

        .invoice .table>tbody>tr>td {
            padding:8px 20px;
        }

        .invoice .invoice-total {
            margin-right:-10px;
            font-size:16px;
        }

        .invoice .last-row {
            border-bottom:1px solid #ddd;
        }

        .invoice-ribbon {
            width:85px;
            height:88px;
            overflow:hidden;
            position:absolute;
            top:-1px;
            right:14px;
        }

        .ribbon-inner {
            text-align:center;
            -webkit-transform:rotate(45deg);
            -moz-transform:rotate(45deg);
            -ms-transform:rotate(45deg);
            -o-transform:rotate(45deg);
            position:relative;
            padding:7px 0;
            left:-5px;
            top:11px;
            width:120px;
            background-color:#66c591;
            font-size:15px;
            color:#fff;
        }

        .ribbon-inner:before,.ribbon-inner:after {
            content:"";
            position:absolute;
        }

        .ribbon-inner:before {
            left:0;
        }

        .ribbon-inner:after {
            right:0;
        }

        @media(max-width:575px) {
            .invoice .top-left,.invoice .top-right,.invoice .payment-details {
                text-align:center;
            }

            .invoice .from,.invoice .to,.invoice .payment-details {
                float:none;
                width:100%;
                text-align:center;
                margin-bottom:25px;
            }

            .invoice p.lead,.invoice .from p.lead,.invoice .to p.lead,.invoice .payment-details p.lead {
                font-size:22px;
            }

            .invoice .btn {
                margin-top:10px;
            }
        }

        @media print {
            .invoice {
                width:900px;
                height:800px;
            }
        }
        </style>

        <script type="text/javascript">

        </script>
        
</head>
