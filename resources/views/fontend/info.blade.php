@extends('fontend.layouts.header')
@section('seo')
    <title>Giới thiệu</title>
@endsection
@section('content')
    <div class="main">
        <div class="section-space"></div>
        <div class="cd-section" id="features">
            <div class="container">
                <!--     *********     FEATURES 1      *********      -->
                <div class="features-1">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto">
                            <h2 class="title">Why our product is the best</h2>
                            <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here. Add a button if you want the user to see more.</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-info">
                                    <i class="material-icons">chat</i>
                                </div>
                                <h4 class="info-title">Free Chat</h4>
                                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-success">
                                    <i class="material-icons">verified_user</i>
                                </div>
                                <h4 class="info-title">Verified Users</h4>
                                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-danger">
                                    <i class="material-icons">fingerprint</i>
                                </div>
                                <h4 class="info-title">Fingerprint</h4>
                                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--     *********    END FEATURES 1      *********      -->
                <!--     *********     FEATURES 2      *********      -->
                <div class="features-2">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto text-center">
                            <h2 class="title">Why our product is the best</h2>
                            <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information.</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info info-horizontal">
                                <div class="icon icon-info">
                                    <i class="material-icons">group_work</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Collaborate</h4>
                                    <p>The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
                                    <a href="#pablo">Find more...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info info-horizontal">
                                <div class="icon icon-danger">
                                    <i class="material-icons">airplay</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Airplay</h4>
                                    <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                                    <a href="#pablo">Find more...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info info-horizontal">
                                <div class="icon icon-success">
                                    <i class="material-icons">location_on</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Location Integrated</h4>
                                    <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                                    <a href="#pablo">Find more...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--     *********    END FEATURES 2      *********      -->
                <!--     *********     FEATURES 3      *********      -->
                <div class="features-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="phone-container">
                                <img src="{{ asset('assets/img/iphone.png') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Some <br /> tags to push the text to align with the image, you can remove it if you have more text on the right side :-) -->
                            <h2 class="title">Your life will be much easier</h2>
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="material-icons">extension</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Hundreds of Components</h4>
                                    <p>The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
                                </div>
                            </div>
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="material-icons">child_friendly</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Easy to Use</h4>
                                    <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                                </div>
                            </div>
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="material-icons">watch_later</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Fast Prototyping</h4>
                                    <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--     *********    END FEATURES 3      *********      -->
                <!--     *********     FEATURES 4      *********      -->
                <div class="features-4">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto text-center">
                            <h2 class="title">Your life will be much easier</h2>
                            <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information.</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-12 ml-auto">
                            <div class="info info-horizontal">
                                <div class="icon icon-info">
                                    <i class="material-icons">code</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">For Developers</h4>
                                    <p>The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
                                </div>
                            </div>
                            <div class="info info-horizontal">
                                <div class="icon icon-danger">
                                    <i class="material-icons">format_paint</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">For Designers</h4>
                                    <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="phone-container">
                                <img src="{{ asset('assets/img/iphone2.png') }}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 mr-auto">
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="material-icons">dashboard</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Bootstrap Grid</h4>
                                    <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                                </div>
                            </div>
                            <div class="info info-horizontal">
                                <div class="icon icon-success">
                                    <i class="material-icons">view_carousel</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Example Pages Included</h4>
                                    <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--     *********    END FEATURES 4      *********      -->
            </div>
            <!--     *********     FEATURES 5      *********      -->
            <div class="features-5" style="background-image: url('./assets/img/bg9.jpg')">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">Your life will be much easier</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="info">
                                <div class="icon">
                                    <i class="material-icons">code</i>
                                </div>
                                <h4 class="info-title">For Developers</h4>
                                <p>The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="info">
                                <div class="icon">
                                    <i class="material-icons">format_paint</i>
                                </div>
                                <h4 class="info-title">For Designers</h4>
                                <p>The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="info">
                                <div class="icon">
                                    <i class="material-icons">dashboard</i>
                                </div>
                                <h4 class="info-title">Bootstrap Grid</h4>
                                <p>The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="info">
                                <div class="icon">
                                    <i class="material-icons">view_carousel</i>
                                </div>
                                <h4 class="info-title">Example Pages Included</h4>
                                <p>The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="info">
                                <div class="icon">
                                    <i class="material-icons">access_time</i>
                                </div>
                                <h4 class="info-title">Save Time</h4>
                                <p>The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="info">
                                <div class="icon">
                                    <i class="material-icons">attach_money</i>
                                </div>
                                <h4 class="info-title">Save Money</h4>
                                <p>The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--     *********    END FEATURES 5      *********      -->
        </div>
        <div class="cd-section" id="teams">
            <!--     *********    TEAM 1     *********      -->
            <div class="team-1" id="team-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto text-center">
                            <h2 class="title">Nhóm</h2>
                            <h5 class="description">This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card card-profile card-plain">
                                <div class="card-header card-avatar">
                                    <a href="#pablo">
                                        <img class="img" src="{{ asset('assets/img/nguyen.png') }}">
                                    </a>
                                </div>
                                <div class="card-body ">
                                    <h4 class="card-title">Tô Bình Nguyên</h4>
                                    <h6 class="card-category text-muted">CEO / Co-Founder</h6>
                                    <p class="card-description">
                                        And I love you like Kanye loves Kanye. We need to restart the human foundation.
                                    </p>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-facebook"><i class="fa fa-facebook-square"></i></a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-google"><i class="fa fa-google"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-profile card-plain">
                                <div class="card-header card-avatar">
                                    <a href="#pablo">
                                        <img class="img" src="{{ asset('assets/img/son.jpg') }}">
                                    </a>
                                </div>
                                <div class="card-body ">
                                    <h4 class="card-title">Nguyễn Đình Sơn</h4>
                                    <h6 class="card-category text-muted">Designer</h6>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation. And I love you like Kanye loves Kanye.
                                    </p>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-profile card-plain">
                                <div class="card-header card-avatar">
                                    <a href="#pablo">
                                        <img class="img" src="{{ asset('assets/img/minh.jpg') }}">
                                    </a>
                                </div>
                                <div class="card-body ">
                                    <h4 class="card-title">Vũ Văn Minh</h4>
                                    <h6 class="card-category text-muted">Web Developer</h6>
                                    <p class="card-description">
                                        I love you like Kanye loves Kanye. Don't be scared of the truth because we need to restart the human foundation.
                                    </p>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-facebook"><i class="fa fa-facebook-square"></i></a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-profile card-plain">
                                <div class="card-header card-avatar">
                                    <a href="#pablo">
                                        <img class="img" src="{{ asset('assets/img/ngocanh.jpg') }}">
                                    </a>
                                </div>
                                <div class="card-body ">
                                    <h4 class="card-title">Nguyễn Thị Ngọc Anh</h4>
                                    <h6 class="card-category text-muted">Web Developer</h6>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation.
                                    </p>
                                </div>
                                <div class="card-footer justify-content-center">
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-google"><i class="fa fa-google"></i></a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--     *********    END TEAM 1      *********      -->
            <!--     *********    TEAM 2     *********      -->

@endsection

