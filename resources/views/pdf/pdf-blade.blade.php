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
                    <img src="file://{{ public_path('images/profile.png') }}" alt="" width="80" style="border-radius: 50%;">
                    <h3>Janino Abrenica</h3>
                    <span>INTERNSHIP</span>
                </td>
            </tr>
            <tr class="resume-content">
                <td>
                    <span class="section-head">HOW TO REACH ME</span>
                    <br></br>
                    <strong>Address:</strong><br>
                    <span class="text">Tuble, Moalboal, Cebu</span>
                    <br>
                    <strong>Phone:</strong><br>
                    <span class="text">+63 960 822 1955</span>
                    <br>
                    <strong>Email:</strong><br>
                    <span class="text">abrenicajanino03@gmail.com</span>
                    <br>
                    <strong>Facebook:</strong><br>
                    <span class="text">janino.abrenica</span><br><br><br><br>

                    <span class="section-head">TECHNICAL SKILLS</span><br><br>
                    <strong>Programming</strong>
                    <ul>
                        <li>PHP</li>
                        <li>HTML</li>
                        <li>JavaScript</li>
                        <li>C++</li>
                    </ul>
                    <strong>Design</strong>
                    <ul>
                        <li>CSS</li>
                        <li>Tailwind CSS</li>
                    </ul>
                    <strong>Database</strong>
                    <ul>
                        <li>MySQL</li>
                        <li>SQLite</li>
                    </ul>
                    <strong>Development Platforms</strong>
                    <ul>
                        <li>Laravel</li>
                        <li>QT Creator (C++)</li>
                        <li>Arduino</li>
                    </ul>
                    <strong>Software Tools</strong>
                    <ul>
                        <li>VS Code</li>
                        <li>Github</li>
                    </ul>
                </td>
                <td>
                    <div style="padding-left: 20px;">
                        <span class="section-head">WORK EXPERIENCE</span>
                        <br></br>
                        <strong class="job-company">Right Apps Incorporated</strong><br>
                        <span class="job-title">Web Developer/IT Support INTERN</span><span style="margin: 20px; font-size: 15px;">|</span>
                        <span class="job-period">July-December 2025</span><br>
                        <ul>
                            <li>Laravel</li>
                            <li>Tailwind CSS</li>
                            <li>MySQL</li>
                            <li>RAI Financial Management and Inventory System's Technical Support</li>
                        </ul>
                        <br>
                        <strong class="job-company">Web-based Point of Sale System</strong><br>
                        <span class="job-title">Backend Developer</span><span style="margin: 20px; font-size: 15px;">|</span>
                        <span class="job-period">March-May 2025</span><br>
                        <ul>
                            <li>PHP</li>
                            <li>JavaScript</li>
                            <li>MySQL</li>
                        </ul>
                        <br>
                        <strong class="job-company">C++ App Development</strong><br>
                        <span class="job-title">C++ Programming Student</span>
                        <ul>
                            <li>2024: Developed Basic C++ App in fulfillment for the finals (2nd year)</li>
                            <li>2025: Handled 2 clients (students) for their C++ app project</li>
                        </ul>
                        <br>
                        <strong class="job-company">ESP8266 WebServer-Based Remote Light Switch (2025)</strong><br>
                        <span class="job-title">Arduino Developer</span><span style="margin: 20px; font-size: 15px;">|</span>
                        <span class="job-period">March 2025</span><br>
                        <ul>
                            <li>System Wiring</li>
                            <li>Code Writing (C++)</li>
                            <li>Basic Web UI (HTML)</li>
                        </ul>
                        <br><br>

                        <span class="section-head">EDUCATIONAL BACKGROUND</span>
                        <br></br>
                        <strong class="school-degree">Bachelor's Degree in Industrial Technology Major in Computer Technology</strong><br>
                        <span class="institution">Cebu Technological University - Moalboal Campus</span><br>
                        <span class="edu-status"><strong>Education Status: </strong>4th Year</span><br>
                        <span>Awards Received: </span>
                        <ul>
                            <li>Dean's Lister 2024 (2nd year)</li>
                        </ul>
                        <br>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    
</body>
</html>