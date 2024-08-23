<!doctype html>
<html lang="en">

<head>
    <title>user</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <?php include("../headlink.php") ?>
</head>

<body>
    <script src="../assets/static/js/initTheme.js"></script>
    
    <div id="app">
        <?php include("../sidebar.php") ?>
        <div id="main" class='layout-navbar navbar-fixed'>
            <header>
            </header>
            <div id="main-content">
                <div class="page-heading">
                    <a href="MemberList.php" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i></a>
                    <div class="page-title my-3">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>新增會員</h3>
                                <p class="text-subtitle text-muted"></p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="fa-solid fa-house"></i></a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><a href="MemberList.php?p=1&sorter=1">會員管理</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"></a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <section class="section">
                        <!-- 會員資訊 -->
                        <div class="card">
                            <div class="card-body">
                                <form class="form form-vertical" action="doCreateMember.php" method="post">
                                    <div class="form-body">
                                        <div class="row">
                                            <!-- <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">ID : <?= $row["MemberID"] ?></label>
                                                <input type="hidden" name="id" value="<?= $row["MemberID"] ?>">
                                            </div>
                                        </div> -->
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="name" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Account  <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" name="account" value="">
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-6 col-12 d-none">
                                            <div class="form-group">
                                                <label for="email-id-vertical">PCID</label>
                                                <input type="text" id="email-id-vertical" class="form-control" name="pcid" placeholder="" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="contact-info-vertical">Admin</label>
                                                <input type="text" id="contact-info-vertical" class="form-control" name="admin" placeholder="Mobile" value="">
                                            </div>
                                        </div> -->
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="password-vertical">Password  <span class="text-danger">*</span></label>
                                                    <input type="text" id="password-vertical" class="form-control" name="password" placeholder="Password" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="password-vertical">rePassword  <span class="text-danger">*</span></label>
                                                    <input type="text" id="password-vertical" class="form-control" name="repassword" placeholder="rePassword" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">NickName</label>
                                                    <input type="text" id="first-name-vertical" class="form-control" name="nickname" placeholder="" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="email-id-vertical">Level  <span class="text-danger">*</span></label>
                                                    <select class="form-select" id="basicSelect" name="level">
                                                        <option>銅</option>
                                                        <option>銀</option>
                                                        <option>金</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="contact-info-vertical">Email  <span class="text-danger">*</span></label>
                                                    <input type="email" id="contact-info-vertical" class="form-control" name="email" placeholder="" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="password-vertical">Phone  <span class="text-danger">*</span></label>
                                                    <input type="text" id="password-vertical" class="form-control" name="phone" placeholder="" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Tel</label>
                                                    <input type="tel" id="first-name-vertical" class="form-control" name="tel" placeholder="" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="email-id-vertical">Address  <span class="text-danger">*</span></label>
                                                    <input type="text" id="email-id-vertical" class="form-control" name="address" placeholder="" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="contact-info-vertical">Birth  <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control mb-3 flatpickr-no-config flatpickr-input active" placeholder="Select date.." name="birth" readonly="readonly" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="password-vertical">Gender  <span class="text-danger">*</span></label>
                                                    <select class="form-select" id="basicSelect" name="gender">
                                                        <option value="男">男</option>
                                                        <option value="女">女</option>
                                                        <option value="其他">其他</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Valid  <span class="text-danger">*</span></label>
                                                    <select class="form-select" id="valid" name="valid">
                                                        <option value="1">有效</option>
                                                        <option value="0">無效</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="email-id-vertical">BlackList  <span class="text-danger">*</span></label>
                                                    <select class="form-select" id="basicSelect" name="blacklist">
                                                        <option value="0">正常</option>
                                                        <option value="1">拉黑</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- 管理員 -->
                                            <!-- <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="password-vertical">Created_UserID</label>
                                                <input type="text" id="password-vertical" class="form-control" name="createuserid" placeholder="" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="password-vertical">Uptate_UserID</label>
                                                <input type="text" id="password-vertical" class="form-control" name="updateuserid" placeholder="" value="">
                                            </div>
                                        </div> -->
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1" data-bs-dismiss="modal">Submit</button>
                                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
            </section>
        </div>
    </div>
    <?php include("../js.php"); ?>
    <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
            </div>
            <div class="float-end">
            </div>
        </div>
    </footer>
    </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const urlParams = new URLSearchParams(window.location.search);
            const status = urlParams.get('status');
            const message = urlParams.get('message');

            if (status === 'success') {
                alert('會員資料已成功新增。');
            } else if (status === 'error') {
                alert('新增會員資料時發生錯誤：' + decodeURIComponent(message));
            }
        });
    </script>
    </script>
    <script>
        src = "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity = "sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin = "anonymous"
    </script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>