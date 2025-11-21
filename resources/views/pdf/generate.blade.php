<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Preview {{ now()->format('Y_m_d_His') }}</title>
    @vite('resources/css/app.css')
    <style>
        body {
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 11px;
        }

        .wrapper {
            padding: 50px;
            max-width: 1000px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wrapper table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .resume-content td:nth-child(1) {
            display: inline-block;
            margin-top: 0;
            padding-right: 20px;
            border-right: solid rgba(86, 86, 88, 0.2) 1px;
        }
        
        table tr td .section-head {
            display: inline-block;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            font-weight: 400;
            padding: 2px;
            background-color: rgba(158, 159, 170, 0.36);
        }

        table tr td .text {
            display: inline-block;
            margin-left:30px;
        }

        .resume-name td h3 {
            font-weight: bold;
            font-size: 20px;
        }

        .resume-name td span {
            display: block;
            margin-bottom: 70px;
        }

        .resume-content td .job-company {
            display: inline-block;
            margin-bottom: 6px;
            font-size: 12px;
            font-weight: 700;
        }

        .resume-content td .job-title {
            display: inline-block;
            font-size: 11px;
        }

        .resume-content td .job-period {
            font-size: 11px;
            display: inline-block;
            /* color: rgba(64, 64, 64, 1);
            font-weight: 500; */
        }

        .resume-content td .skill-tech {
            display: inline-block;
            margin-top: 4px;
        }

        .resume-content td .school-degree {
            display: inline-block;
            margin-bottom: 6px;
            font-size: 12px;
            font-weight: 700;
        }

        .resume-content td .institution {
            display: inline-block;
            font-size: 11px;
        }

    </style>
</head>
<body>
    <div class="wrapper">
        <table>
            <tr class="resume-name">
                <td colspan="2">
                    <!-- <img src="file://{{ public_path('images/profile.png') }}" alt="" width="80" style="border-radius: 50%;"> -->
                    <h3>{{ $appli_name }}</h3>
                    <span>{{ $appli_posi }}</span>
                </td>
            </tr>
            <tr class="resume-content">
                <td>
                    <span class="section-head">HOW TO REACH ME</span>
                    <br></br>
                    <strong>Address:</strong><br>
                    <span class="text">{{ $appli_addre }}</span>
                    <br>
                    <strong>Phone:</strong><br>
                    <span class="text">{{ $contct_num }}</span>
                    <br>
                    <strong>Email:</strong><br>
                    <span class="text">{{ $appli_email }}</span>
                    <br>
                    @if($appli_fb !== null )
                    <strong>Facebook:</strong><br>
                    <span class="text">{{ $appli_fb }}</span>
                    @endif<br><br><br><br>

                    <span class="section-head">SKILLS</span><br><br>
                    <strong>Key Skills</strong><br>
                    <ul>
                        @foreach($skills as $skill)
                        <li>{{ $skill }}</li>
                        @endforeach
                    </ul>
                </td>
                <td>
                    <div style="padding-left: 20px;">
                        <span class="section-head">WORK EXPERIENCE</span>
                        <br></br>
                        @foreach($work_items as $work_exp)
                        <strong class="job-company">{{ $work_exp['job_company'] }}</strong><br>
                        <span class="job-title">{{ $work_exp['job_title'] }}</span><span style="margin: 20px; font-size: 15px;">|</span>
                        <span class="job-period">{{ $work_exp['job_period'] }}</span><br>
                        <ul>
                            @foreach($work_exp['job_desc'] as $description)
                            <li>{{ $description }}</li>
                            @endforeach
                        </ul>
                        <br>
                        @endforeach
                        <br><br>

                        <span class="section-head">EDUCATIONAL BACKGROUND</span>
                        <br></br>
                        @foreach($schools as $school)
                        <strong class="school-degree">{{ $school['degree'] }}</strong><br>
                        <span class="institution">{{ $school['institution'] }}</span><br>
                        <span class="edu-status">{{ $school['school_year'] }}</span><br>
                        @if(count($school['awards']) > 0)
                        <span>Awards Received: </span>
                            <ul>
                                @foreach($school['awards'] as $award)
                                    <li>{{ $award }}</li>
                                @endforeach
                            </ul>
                        @endif
                        @endforeach
                        <br>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>