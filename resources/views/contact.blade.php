@extends('app.main')
@section('title')
Contact The Flamexpro
@endsection
@section('main')

    <section>
        <div class="gap black-layer opc5 overlap144">
            <div class="fixed-bg2" style="background-image: url(assets/images/pg-tp-bg.jpg);"></div>
            <div class="container">
                <div class="pg-tp-wrp">
                    <h1 itemprop="headline">Contact Us</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" title="" itemprop="url">Home</a></li>
                        <li class="breadcrumb-item active">Contact Us</li>
                    </ol>
                </div><!-- Page Top Wrap -->
            </div>
        </div>
    </section>
    
    <section class="hm2-safety-section">
        <div class="auto-container">
            <!-- hm2 Sec Title -->
            <div class="">
                

                    <h3 class="text-center centered" style="color:#000;font-weight: bold;">Get in Touch:</h3>
                 <div class="row">
            <div class="col-lg-12 col-sm-12 col-12 col-md-12 p-5">
            <form style="border:1px solid var(--main-color);" class="p-5" method="post" action="contact/contact-form">
    @csrf
    <!-- 2 column grid layout with text inputs for the first and last names -->

     


    <div class="row mb-4">
        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control"  placeholder="Enter your name" />
            </div>
        </div>
        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="your@mail.com"/>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="phone">Phone</label>
                <input type="text" id="phone" name="phone" class="form-control" placeholder="phone" minlength="10" maxlength="10" />
            </div>
        </div>
        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="interest">Interest In</label>
                <input type="text" id="interest" name="interest" class="form-control" placeholder="interest in *" />
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="whatsapp_number">WhatsApp Number</label>
                <input type="text" id="whatsapp_number" name="whatsapp_number" class="form-control" placeholder="Whatsapp Number" minlength="10" maxlength="10" />
            </div>
        </div>
        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="about">About Our Service or Product</label>
                <input type="text" id="about" name="about" class="form-control" />
            </div>
        </div>
    </div>

    <!-- Textarea for Address -->
    <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="address">Address</label>
        <textarea id="address" name="address" class="form-control"></textarea>
    </div>

    <!-- Submit button -->
    <button type="submit" class="theme-btn hm2-btn-style-one text-light" style="color:#fff !important; align-items: baseline;
    display: flex;
    justify-content: left;">Submit Now</button>
</form>

            </div>
        </div>
                    

                
            </div>
        </div>
        
    </section>
   



<section class="hm2-help-section mb-4" style="background-image: url(assets/images/background/3.jpg)">
        <div class="auto-container">
            <div class="side-image">
                <img src="assets/images/resource/helper.png" alt="">
            </div>
            <div class="row clearfix">
                
                <!-- Help Column -->
                <div class="help-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title">Fire Department</div>
                        <h2>Help Desk</h2>
                        <div class="phone">+918431623434<span>8 a.m. – 4:30 p.m. Eastern time</span></div>

                        <div class="phone">Address<span>218/190, 1st Sector, HSR Layout, Bengaluru, Karnataka 560102</span></div>


                        <a href="#" class="email">info@flamexpro.com</a>
                        <a href="#" class="question">Ask a question online</a>
                    </div>
                </div>
                <!-- Content Column -->
                
                
            </div>
        </div>
    </section>


<section>

     <div class="map-section overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15555.535466436975!2d77.63035117876315!3d12.915184963333381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15047d757787%3A0x69579ef544582695!2s856%2C%2025th%20A%20Main%20Rd%2C%201st%20Sector%2C%20HSR%20Layout!5e0!3m2!1sen!2sin!4v1713876528999!5m2!1sen!2sin" width="1114" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              
            </div>
        </div>
    </div>
</div>

</section>
 
        <section class="hm2-safety-section">
        <div class="auto-container">
            <!-- hm2 Sec Title -->
            <div class="title-box centered">
                


                    <h3>Contact Us for Your Fire Safety Needs:</h3>
                    <div class="title text-justify">Don't compromise on safety. Choose FLAMEXPRO for professional fire safety solutions that provide total peace of mind. Contact us today to discuss your requirements, and let us be your trusted partner in safeguarding what matters most.
<br><br>
<b class="text-dark">Rapid Response Team:</b>Your safety is our priority – choose FLAMEXPRO for unparalleled expertise in fire safety.<br><br>

<b class="text-dark">Welcome to FLAMEXPRO Where Inspection Comes First, and Installation Follows with Precision.</b><br><br>

At FLAMEXPRO, we prioritize the safety and reliability of your systems from the very beginning. Our approach is grounded in a meticulous inspection process that ensures every aspect is thoroughly evaluated before moving on to the installation phase. This commitment sets the foundation for a seamless and secure implementation of your solutions.<br><br><br><br>
<b class="text-dark">Our Methodology: Inspection First, Installation Next</b><br><br>
Comprehensive Site Assessment: Our process begins with a detailed site assessment. Our team of experts evaluates the environment, taking into account factors such as infrastructure, safety regulations, and specific requirements. This assessment forms the basis for a customized plan tailored to your needs.<br><br>
Thorough Inspection Protocols: Before any installation occurs, we conduct a rigorous inspection of the designated site. This includes an evaluation of existing systems, infrastructure, and potential challenges. Our goal is to identify any issues that may impact the installation process or compromise the performance of your systems in the long run.<br><br>
<b class="text-dark">Detailed Reporting and Recommendations:</b> Following the inspection, we provide you with a comprehensive report outlining our findings and recommendations. This transparent communication ensures that you are fully informed about the state of your site and the proposed solutions. We work collaboratively with you to address any concerns and refine the installation plan.<br><br>

<b class="text-dark">Customized Installation Plan:</b> Armed with insights from the inspection, we develop a customized installation plan that aligns with your specific needs and objectives. This plan takes into consideration the intricacies of the site, compliance requirements, and any unique challenges that may have been identified during the inspection.<br><br>

<b class="text-dark">Skilled Installation Teams:</b> Our installation teams are comprised of skilled professionals with extensive experience in implementing a wide range of solutions. They follow industry best practices and adhere to the highest standards of quality and safety throughout the installation process.<br><br>
Post-Installation Verification: Once the installation is complete, we conduct thorough post-installation verification checks to ensure that every component is functioning as intended. This step provides an additional layer of assurance that your systems are ready to deliver optimal performance.<br><br>
Why Choose FLAMEXPRO

<b class="text-dark">Commitment to Excellence:</b> We prioritize excellence in every aspect of our service, from inspection to installation.<br><br>

<b class="text-dark">Customized Solutions:</b> Our approach is tailored to your unique needs, ensuring that the installed systems align perfectly with your requirements.<br>

<b class="text-dark">Safety First:</b> Our commitment to safety is unwavering, and we adhere to the highest industry standards to create secure environments.

<br>
<b class="text-dark">Proactive Problem Solving:</b> Through our meticulous inspection process, we proactively identify and address potential issues before they can impact your systems.<br>
Choose FLAMEXPRO for a holistic approach that puts inspection at the forefront, ensuring the success and longevity of your installations. Contact us today to discuss your project and experience the difference our commitment to excellence makes.<br><br>
Your satisfaction and safety are our top priorities – trust FLAMEXPRO for reliable inspection and precise installation.



                    </div>

                
            </div>
        </div>
        
    </section>
    

@endsection