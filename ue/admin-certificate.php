<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Admin - Issue Certificate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/stylesadmin.css" />
   
</head>

<body>

    <div class="admin-wrap">
        <div class="card">
            <h2>Issue Certificate</h2>

            <form id="issueCertForm">
                <div class="grid">
                    <div>
                        <label>Student</label>
                        <select id="studentSelect" name="student_id" required>
                            <option value="">Select student</option>
                        </select>
                    </div>

                    <div>
                        <label>Course Name</label>
                        <select name="course_name" required>
                            <option value="">Select course</option>
                            <option>Web Development</option>
                            <option>Graphic Designing</option>
                            <option>Digital Marketing & Media Marketing</option>
                            <option>E-Commerce</option>
                            <option>MS Office</option>
                            <option>WordPress</option>
                            <option>Data Analysis With Python</option>
                        </select>
                    </div>

                    <div>
                        <label>Course Slug</label>
                        <input name="course_slug" placeholder="web / graphic / digital..." />
                    </div>

                    <div>
                        <label>Issue Date</label>
                        <input type="date" name="issue_date" required />
                    </div>

                    <div>
                        <label>From Date</label>
                        <input type="date" name="from_date" />
                    </div>

                    <div>
                        <label>To Date</label>
                        <input type="date" name="to_date" />
                    </div>
                </div>

                <input type="hidden" name="student_name" id="studentNameHidden" />

                <button class="btn" type="submit">Issue</button>
            </form>

            <div id="issueResult"></div>
        </div>
    </div>

   
    <script src="assets/js/admin-certificate.js"></script>
</body>

</html>