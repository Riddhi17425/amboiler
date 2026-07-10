@include('layouts.frontheader')
<section class="contact_banner">
    <div class="container-fluid p-0">
        <!-- <img src="./images/contact_bg.png" alt="contact" class="img-fluid w-100"> -->
        <div class="contact_banner_ctnt" style="background-image:url({{ asset('public/front/images/banner_qualitymanagement.jpg')}});" loading="lazy">
            <div class="breadcrumbs">
                <a href="{{url('/')}}"><b>Home</b></a> > <span>Quality Management</span>
            </div>
            <h1 class="main_white_head col-md-12 col-xl-12 col-xxl-12">Quality & Compliance – Our <br> Commitment to Excellence</h1>
        </div>
    </div>
</section>

<section class="qua_mana_one mt-80">
    <div class="ym_container">
        <div class="row border_btm">
            <div class="col-lg-12">
                    <h2 class="main_head mb-4">Commitment to Quality & Continuous Improvement</h2>
            </div>
            <div class="col-md-6 mb-4 mb-lg-auto">
               <div class="abt_ctnt">
                    <img src="{{ asset('public/front/images/qm_2.png')}}" loading="lazy" alt="Continuous Improvement" class="img-fluid bd_radius">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="px-lg-4">
                    <img src="{{ asset('public/front/images/counter_Vector.png') }}" loading="lazy" alt="Vector" class="img-fluid mb-2">
                    <p>At <b>AM Boilers</b>, quality isn’t a checkpoint; it’s a culture. Our ISO 9001:2015-certified quality management system underpins every project, ensuring systematic, customer-centric processes from initial consultation through final handover. Rigorous documentation, standardized work procedures, and clear performance metrics guarantee that each boiler repair, fabrication job, meets your specifications and global industry benchmarks.</p>
                    <p>Continuous improvement is built into our DNA. We conduct regular internal and external audits, track key quality indicators, and implement corrective and preventive actions (CAPA) to eliminate root causes of nonconformance. Monthly management reviews analyze data trends, lead to process refinements, and drive innovation so we not only fix problems but prevent them from recurring.</p>
                    <p class="mb-0">
                        Our people are our greatest asset in delivering excellence. Every engineer, technician, and welder undergoes structured training in ASME codes, HSE protocols, and Lean Six Sigma fundamentals. Through ongoing skills assessments, toolbox talks, we foster a learning environment where frontline feedback fuels smarter workflows, tighter quality controls, and safer work practices, keeping your assets running reliably, day in and day out.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="qua_mana_two mt-80">
    <div class="ym_container">
        <div class="row">
            <div class="col-lg-6 col-xxl-5 mb-4 mb-lg-auto">
                <h2 class="main_h1_head">Sustainable Practices </h2>
                <p class="mb-0">We recognize the importance of environmental conservation and are committed to embedding sustainability into every aspect of our operations. From project planning to field execution, our initiatives focus on pollution prevention, waste reduction, recycling, and resource stewardship, minimising our environmental footprint and contributing to a greener future.</p>
                <div class="border_btm_line qm_box">
                    <h3 class="sub_title">Efficient resource management</h3>
                    <p class="mb-0">By optimizing water, energy, and material use during fabrication, inspection, and maintenance, we drive down consumption without compromising quality. Advanced process controls and real-time monitoring help us achieve peak efficiency on every job.</p>
                </div>
                <div class="border_btm_line qm_box">
                    <h3 class="sub_title">Reduction of waste and emissions</h3>
                    <p class="mb-0">Our waste management program emphasizes segregation, responsible disposal, and recycling of both hazardous and non hazardous materials. Coupled with low-emission equipment and clean-burn technologies, we significantly cut emissions and divert waste from landfills.</p>
                </div>
                <div class="border_btm_line qm_box">
                    <h3 class="sub_title">Environmental regulations.</h3>
                    <p class="mb-0"><b>AM Boilers</b> Environmental Management System aligns with ISO 14001 principles and GCC statutory requirements. Regular internal audits, compliance reviews, and ongoing staff training ensure we not only meet but strive to exceed all legal and industry environmental standards.</p>
                </div>
            </div>
            <div class="col-lg-6 col-xxl-7">
                <img src="{{ asset('public/front/images/qm_1.png')}}" loading="lazy"  alt="Sustainable Practices" class="img-fluid bd_radius d-block ms-auto">
            </div>
        </div>
    </div>
</section>
@include('layouts.frontfooter')