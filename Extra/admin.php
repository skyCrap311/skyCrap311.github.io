<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>University of the East OJA</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
        <link href="../css/admin.css" rel="stylesheet" />
    </head>
    <body>
        <div class="container">
            <aside>
                <div class="top">
                    <div class="logo">
                        <img src="../images/uelogo.png" alt="uelogo">
                        <h2>OJAM<span class="danger">&nbsp;Admin</h2>
                    </div>
                    <div class="close" id="close-btn">
                        <span class="material-icons-sharp">close</span>
                    </div>
                </div>

                <div class="sidebar">
                    <a href="#" class="active">
                        <span class="material-icons-sharp">grid_view</span>
                        <h3>Dashboard</h3>
                    </a>
                    <a href="#">
                    <span class="material-icons-sharp">stars</span>
                        <h3>Review Applicants</h3>
                    </a>
                    <a href="#">
                    <span class="material-icons-sharp">insert_invitation</span>
                        <h3>Set Appointments</h3>
                    </a>
                    <a href="#">
                    <span class="material-icons-sharp">event</span>
                        <h3>Schedules</h3>
                    </a>
                    <a href="#">
                    <span class="material-icons-sharp">assignment_returned</span>
                        <h3>Job Posting</h3>
                    </a>
                    <a href="#">
                    <span class="material-icons-sharp">inbox</span>
                        <h3>Messages</h3>
                        <span class="message-count">2</span>
                    </a>
                    <a href="#">
                    <span class="material-icons-sharp">settings</span>
                        <h3>Setting</h3>
                    </a>
                    <a href="#">
                    <span class="material-icons-sharp">logout</span>
                        <h3>Logout</h3>
                    </a>
                </div>
            </aside>

            <main>
                <h1>Dashboard</h1>
                <div class="date">
                    <span id="time"></span>
                </div>

                <div class="insights">
                    <div class="applicants1">
                        <span class="material-icons-sharp">analytics</span>
                        <div class="middle">
                            <div class="lef">
                                <h3>Total Applicants Per Day</h3>
                                <h1>12</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                    <p>4%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="applicants2">
                    <span class="material-icons-sharp">query_stats</span>
                        <div class="middle">
                            <div class="lef">
                                <h3>Total Applicants Per Month</h3>
                                <h1>148</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                    <p>10%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="applicants3">
                    <span class="material-icons-sharp">insights</span>
                        <div class="middle">
                            <div class="lef">
                                <h3>Total Applicants Per Year</h3>
                                <h1>1,002</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                    <p>100%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="top-applicants">
                    <h2>Top Applicants</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Title/Position</th>
                                <th>Rank</th>
                                <th>Department</th>
                                <th>Name</th>
                                <th>Grade</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>College of Business Administration - Teacher</td>
                                <td>Teacher</td>
                                <td>CBA</td>
                                <td>Eduardo R. Garpo</td>
                                <td>9.8 ORG</td>
                                <td class="warning">Pending</td>
                                <td><a href="#" class="info">View</a></td>
                            </tr>
                            <tr>
                                <td>College of Business Administration - Assistant Dean</td>
                                <td>Assistant Dean</td>
                                <td>CBA</td>
                                <td>Jay R. Pon</td>
                                <td>9.9 ORG</td>
                                <td class="danger">Processing</td>
                                <td><a href="#" class="info">View</a></td>
                            </tr>
                            <tr>
                                <td>College of Computer Studies and System - Assistant Teacher</td>
                                <td>Assistant Teacher</td>
                                <td>CCSS</td>
                                <td>Ruth G. Ong</td>
                                <td>9.6 ORG</td>
                                <td class="warning">Pending</td>
                                <td><a href="#">View</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="#">Show All</a>
                </div>
            </main>
            <div class="right">
                <div class="top">
                    <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                    </button>
                    <div class="theme-toggler">
                        <span class="material-icons-sharp active">light_mode</span>
                        <span class="material-icons-sharp">dark_mode</span>
                    </div>
                    <div class="profile">
                        <div class="info">
                            <p>Hey, <b>Ken<b></p>
                            <small class="text-muted">
                                Admin
                            </small>
                        </div>
                        <div class="profile-photo">
                            <img src="../images/sample.jpg">
                        </div>
                    </div>
                </div>
                
                <div class="recent-updates">
                    <h2>Recent Updates</h2>
                    <div class="updates">
                        <div class="update">
                            <div class="profile-photo">
                                <img src="../images/Image Slide 1.jpg">
                            </div>
                            <div class="message">
                                <p><b>Jay R. Pon</b>'s application is now being processed</p>
                                <smal class="text-muted">
                                    3 Days Ago
                                </smal>
                            </div>
                        </div>
                        <div class="update">
                            <div class="profile-photo">
                                <img src="../images/Image Slide 1.jpg">
                            </div>
                            <div class="message">
                                <p><b>Jay R. Pon</b>'s application is now being processed</p>
                                <smal class="text-muted">
                                    3 Days Ago
                                </smal>
                            </div>
                        </div>
                        <div class="update">
                            <div class="profile-photo">
                                <img src="../images/Image Slide 1.jpg">
                            </div>
                            <div class="message">
                                <p><b>Jay R. Pon</b>'s application is now being processed</p>
                                <smal class="text-muted">
                                    3 Days Ago
                                </smal>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="department-operation">
                    <h2>Department Posting</h2>
                    <div class="item bsa">
                        <div class="icon">
                            <span class="material-icons-sharp">business</span>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>College of Business Adminstration</h3>
                                <small class="muted-text">Last Month</small>
                            </div>
                            <h5 class="success">+5%</h5>
                            <h3>6</h3>
                        </div>
                    </div>
                    <div class="item cfad">
                        <div class="icon">
                            <span class="material-icons-sharp">design_services</span>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>College of Fine Arts, Architecture and Design</h3>
                                <small class="muted-text">Last Month</small>
                            </div>
                            <h5 class="success">+17%</h5>
                            <h3>32</h3>
                        </div>
                    </div>
                    <div class="item eng">
                        <div class="icon">
                            <span class="material-icons-sharp">engineering</span>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>College of Engineering</h3>
                                <small class="muted-text">Last Month</small>
                            </div>
                            <h5 class="success">+46%</h5>
                            <h3>98</h3>
                        </div>
                    </div>
                    <div class="item cas">
                        <div class="icon">
                            <span class="material-icons-sharp">science</span>
                        </div>
                        <div class="right">
                            <div class="info">
                                <h3>College of Arts and Sciences</h3>
                                <small class="muted-text">Last Month</small>
                            </div>
                            <h5 class="success">+11%</h5>
                            <h3>12</h3>
                        </div>
                    </div>
                    <div class="item add-department">
                        <div>
                            <span class="material-icons-sharp">add</span>
                            <h3>Add Department</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../dark.js"></script>
        <script src="../time.js"></script>
    </body>
</html>