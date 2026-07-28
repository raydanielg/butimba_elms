<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        @page { margin: 30px 40px; }
        * { box-sizing: border-box; }
        body {
            font-family: 'Helvetica', sans-serif;
            font-size: 12px;
            color: #1a1a1a;
            margin: 0;
            padding: 0;
        }

        /* Header */
        .header {
            display: table;
            width: 100%;
            border-bottom: 3px solid #1a3a1a;
            padding-bottom: 15px;
            margin-bottom: 25px;
        }
        .header-left { display: table-cell; width: 70px; vertical-align: middle; }
        .header-right { display: table-cell; vertical-align: middle; padding-left: 15px; }
        .header-right h1 {
            font-size: 20px;
            color: #1a3a1a;
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .header-right p {
            font-size: 10px;
            color: #555;
            margin: 3px 0 0 0;
        }
        .header-right .subtitle {
            font-size: 11px;
            color: #6b8e6b;
            font-weight: bold;
            margin-top: 5px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* Document Title */
        .doc-title {
            text-align: center;
            background: #1a3a1a;
            color: #fff;
            padding: 10px;
            font-size: 14px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 25px;
        }

        /* Section Headers */
        .section-header {
            background: #6b8e6b;
            color: #fff;
            padding: 7px 12px;
            font-size: 11px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-top: 20px;
            margin-bottom: 0;
        }
        .section-header .num {
            display: inline-block;
            width: 18px;
            height: 18px;
            line-height: 18px;
            text-align: center;
            background: rgba(255,255,255,0.25);
            border-radius: 50%;
            font-size: 10px;
            margin-right: 8px;
        }

        /* Info Table */
        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 5px;
        }
        .info-table td {
            padding: 7px 12px;
            border: 1px solid #d0d0d0;
            font-size: 11px;
        }
        .info-table .label {
            background: #f5f5f5;
            font-weight: bold;
            color: #444;
            width: 35%;
            text-transform: uppercase;
            font-size: 10px;
            letter-spacing: 0.5px;
        }
        .info-table .value {
            color: #1a1a1a;
        }

        /* Two column layout */
        .two-col {
            width: 100%;
            border-collapse: collapse;
        }
        .two-col td {
            width: 50%;
            vertical-align: top;
            padding: 0;
        }
        .two-col .left { padding-right: 8px; }
        .two-col .right { padding-left: 8px; }

        /* Declaration */
        .declaration {
            margin-top: 25px;
            border: 2px solid #1a3a1a;
            padding: 15px;
        }
        .declaration h3 {
            font-size: 11px;
            text-transform: uppercase;
            color: #1a3a1a;
            margin: 0 0 8px 0;
            letter-spacing: 1px;
        }
        .declaration p {
            font-size: 10px;
            line-height: 1.6;
            color: #333;
            margin: 0;
        }
        .declaration .check {
            font-size: 14px;
            color: #1a3a1a;
            font-weight: bold;
        }

        /* Signature area */
        .signature-area {
            margin-top: 35px;
            width: 100%;
        }
        .signature-area td {
            vertical-align: bottom;
        }
        .sig-line {
            border-top: 1px solid #333;
            padding-top: 5px;
            font-size: 9px;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Footer */
        .footer {
            margin-top: 30px;
            border-top: 1px solid #ccc;
            padding-top: 10px;
            text-align: center;
            font-size: 9px;
            color: #888;
        }
        .footer .ref {
            font-weight: bold;
            color: #555;
        }

        /* Status badge */
        .status-badge {
            display: inline-block;
            padding: 3px 10px;
            background: #6b8e6b;
            color: #fff;
            font-size: 9px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 2px;
        }
    </style>
</head>
<body>

    {{-- Header --}}
    <div class="header">
        <div class="header-left">
            <img src="{{ public_path('logo.png') }}" style="width: 60px; height: 60px;" alt="Logo">
        </div>
        <div class="header-right">
            <h1>Butimba Teachers College</h1>
            <p>P.O. Box 1234, Mwanza, Tanzania | Tel: 0689 363 690 / 0653 144 677</p>
            <div class="subtitle">Online Application Form &mdash; 2026/2027</div>
        </div>
    </div>

    {{-- Document Title --}}
    <div class="doc-title">Application Summary</div>

    {{-- Application Reference --}}
    <table class="info-table" style="margin-bottom: 0;">
        <tr>
            <td class="label" style="width: 25%;">Applicant Name</td>
            <td class="value" style="width: 35%;">{{ $app->full_name }}</td>
            <td class="label" style="width: 20%;">Status</td>
            <td class="value" style="width: 20%;">
                @if(isset($app->status) && $app->status)
                    <span class="status-badge">{{ $app->status }}</span>
                @else
                    <span class="status-badge">Pending</span>
                @endif
            </td>
        </tr>
    </table>

    {{-- Section 1: Personal Information --}}
    <div class="section-header"><span class="num">1</span>Personal Information</div>
    <table class="info-table">
        <tr>
            <td class="label">Full Name</td>
            <td class="value">{{ $app->full_name }}</td>
        </tr>
        <tr>
            <td class="label">Email Address</td>
            <td class="value">{{ $app->email }}</td>
        </tr>
        <tr>
            <td class="label">Gender</td>
            <td class="value">{{ $app->gender }}</td>
        </tr>
        <tr>
            <td class="label">Date of Birth</td>
            <td class="value">{{ isset($app->dob) ? \Carbon\Carbon::parse($app->dob)->format('d/m/Y') : $app->dob ?? 'N/A' }}</td>
        </tr>
    </table>

    {{-- Section 2: Residence & Contact --}}
    <div class="section-header"><span class="num">2</span>Residence &amp; Contact</div>
    <table class="info-table">
        <tr>
            <td class="label">Region</td>
            <td class="value">{{ $app->region }}</td>
            <td class="label">District</td>
            <td class="value">{{ $app->district }}</td>
        </tr>
        <tr>
            <td class="label">Ward</td>
            <td class="value">{{ $app->ward }}</td>
            <td class="label">Phone Number</td>
            <td class="value">{{ $app->phone }}</td>
        </tr>
        <tr>
            <td class="label">Postal Address</td>
            <td class="value" colspan="3">{{ $app->address }}</td>
        </tr>
        <tr>
            <td class="label">Relative's Phone</td>
            <td class="value" colspan="3">{{ $app->relative_phone }}</td>
        </tr>
    </table>

    {{-- Section 3: Academic & Professional --}}
    <div class="section-header"><span class="num">3</span>Academic &amp; Professional Background</div>
    <table class="info-table">
        <tr>
            <td class="label">Employment Status</td>
            <td class="value">{{ $app->employment_status }}</td>
        </tr>
        <tr>
            <td class="label">Previous Qualification</td>
            <td class="value">{{ $app->previous_profession }}</td>
        </tr>
        <tr>
            <td class="label">College Attended</td>
            <td class="value">{{ $app->college_name }}</td>
        </tr>
        <tr>
            <td class="label">Graduation Year</td>
            <td class="value">{{ $app->graduation_year }}</td>
        </tr>
        <tr>
            <td class="label">Certificate Number</td>
            <td class="value">{{ $app->certificate_number }}</td>
        </tr>
    </table>

    {{-- Section 4: Programme Choice --}}
    <div class="section-header"><span class="num">4</span>Programme Choice</div>
    <table class="info-table">
        <tr>
            <td class="label">Applied Programme</td>
            <td class="value" style="font-weight: bold; color: #1a3a1a;">{{ $app->applied_course }}</td>
        </tr>
    </table>

    {{-- Declaration --}}
    <div class="declaration">
        <h3>Declaration</h3>
        <p>
            <span class="check">&#9745;</span> I, <strong>{{ $app->full_name }}</strong>, hereby declare that all the information
            provided in this application is true and correct to the best of my knowledge. I understand that
            if any information provided is found to be false or misleading, I shall be held accountable
            in accordance with the relevant laws, rules, and regulations.
        </p>
    </div>

    {{-- Signature Area --}}
    <table class="signature-area">
        <tr>
            <td style="width: 50%; padding-right: 30px;">
                <div style="height: 40px;"></div>
                <div class="sig-line">Applicant's Signature</div>
            </td>
            <td style="width: 50%; padding-left: 30px;">
                <div style="height: 40px;"></div>
                <div class="sig-line">Date</div>
            </td>
        </tr>
    </table>

    {{-- Footer --}}
    <div class="footer">
        <p class="ref">Butimba Teachers College | Online Application System</p>
        <p>Generated on {{ date('d/m/Y H:i:s') }} | This is a computer-generated document</p>
    </div>

</body>
</html>
