
<?php $__env->startSection('title'); ?> <?php echo e(__('Appointment list')); ?> <?php $__env->stopSection(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">
    function getsubItemApi(id) {

        document.getElementById("myelement").innerHTML = '';


        let URL = "/api/subitemlist/" + id;

        console.log(URL);

        $.get(URL, function(data, status) {

            let objectData = JSON.parse(data);

            //console.log(objectData);

            objectData.forEach((element, index, array) => {
                console.log(element.cytology_subitem); // 100, 200, 300

                document.getElementById("myelement").innerHTML +=
                    '<div class="row" style="align-items: baseline; margin-bottom: 10px">' +
                    '<div class="col-lg-5 col-md-5 col-sm-5">' + element.code + '</div>' +
                    '<div class="col-lg-5 col-md-5 col-sm-5"> ' + element.cytology_subitem + '</div>' +
                    '<div class="col-lg-2 col-md-2 col-sm-2"><a href="#"> <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0"' +
                    'title="Update Profile" onclick="deletesubtitle(' + element.id + ', '+ id +')"><i class="mdi mdi-trash-can"></i> </button></a></div>' +
                    '</div>';

            });
            
                document.getElementById("subitemFooter").innerHTML =
                    '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>' +
                    '<button type="button" data-toggle="modal" data-target="#myModal" id="testing" ' +
                    ' onclick="addsubtitle(' + id + ')" class="btn btn-primary">Add Subtitle</button>';



            let modal = new bootstrap.Modal(document.getElementById('subCytologyModal'));
            modal.show();



        });

    }

    function addsubtitle(itemId) {
    

        debugger;

        console.log('myModal' + itemId + '')


        let modal = new bootstrap.Modal(document.getElementById('myModal'));

        debugger;

        document.getElementById("addsubitemFooter").innerHTML =
            '<button type="submit" id="saveSubitem" onclick="savesubtitle(' + itemId + ')" class="btn btn-primary">Save</button>' +
            '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>';

    }

    function savesubtitle(itemId) {

        document.getElementById("myelement").innerHTML = '';




        var frm = $('#cytologysubitemForm');


        $.ajax({

            url: 'storecytologysubitem' + '/' + itemId,
            data: frm.serialize(),
            success: function(data) {
                console.log('Submission was successful.');
                console.log(data);

                $("#myModal").modal("hide");

                let URL = "/api/subitemlist/" + itemId;

                $.get(URL, function(data, status) {

                    let objectData = JSON.parse(data);

                    //console.log(objectData);

                    objectData.forEach((element, index, array) => {
                        console.log(element.cytology_subitem); // 100, 200, 300

                        document.getElementById("myelement").innerHTML +=
                            '<div class="row" style="align-items: baseline; margin-bottom: 10px">' +
                             '<div class="col-lg-5 col-md-5 col-sm-5">' + element.code + '</div>' +
                              '<div class="col-lg-5 col-md-5 col-sm-5"> ' + element.cytology_subitem + '</div>' +
                            '<div class="col-lg-2 col-md-2 col-sm-2"><a href="#"> <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0"' +
                                    'title="Update Profile" onclick="deletesubtitle(' + element.id + ')"><i class="mdi mdi-trash-can"></i> </button></a></div>' +
                            '</div>';

                    });



                    objectData.map(item => {
                        //console.warn(item)
                        document.getElementById("subitemFooter").innerHTML =
                            '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>' +
                            '<button type="button" data-toggle="modal" data-target="#myModal" id="testing" ' +
                            ' onclick="addsubtitle(' + item.cytology_Id + ')" class="btn btn-primary">Add Subtitle</button>';

                    })

                    // let modal = new bootstrap.Modal(document.getElementById('subCytologyModal'));
                    // modal.show();



                });
            },
            error: function(data) {
                console.log('An error occurred.');
                console.log(data);
            },
        });

    }
    
    function editsubtitle () {
        
    }

    function deletesubtitle(subitemid , cytologyID) {
        
document.getElementById("myelement").innerHTML = ''
 
        let URL = "/api/delete-subitem/" + subitemid;

        $.ajax({
            url: URL,
            type: 'DELETE',
            success: function(result) {
                // Do something with the result
            }
        });
        
                 let SUBURL = "/api/subitemlist/" + cytologyID;

                $.get(SUBURL, function(data, status) {

                    let objectData = JSON.parse(data);

                    //console.log(objectData);

                    objectData.forEach((element, index, array) => {
                        console.log(element.cytology_subitem); // 100, 200, 300

                        document.getElementById("myelement").innerHTML +=
                            '<div class="row" style="align-items: baseline; margin-bottom: 10px">' +
                            '<div class="col-lg-5 col-md-5 col-sm-5">' + element.code + '</div>' +
                    '<div class="col-lg-5 col-md-5 col-sm-5"> ' + element.cytology_subitem + '</div>' +
                            '<div class="col-lg-2 col-md-2 col-sm-2"><a href="#" onclick="deletesubtitle(' + element.id + ', '+ cytologyID +')"> <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0"' +
                            'title="Update Profile"><i class="mdi mdi-trash-can"></i> </button></a></div>' +
                            '</div>';

                    });



                  

                    let modal = new bootstrap.Modal(document.getElementById('subCytologyModal'));
                    modal.show();



                });

    }
</script>

<script>
    $(document).ready(function() {

        console.info('modal is loaded');





        //  $.ajax({
        //             url: frm.attr('action'),
        //             data: frm.serialize(),
        //             success: function (data) {
        //                 console.log('Submission was successful.');
        //                 console.log(data);
        //                  $("#myModal").modal("hide");
        //             },
        //             error: function (data) {
        //                 console.log('An error occurred.');
        //                 console.log(data);
        //             },
        //         });



    });
</script>


<script>
    $(document).ready(function() {
        // Hide the Modal


        var frm = $('#cytologysubitemForm');


        frm.submit(function(e) {

            e.preventDefault();


            $.ajax({
                url: frm.attr('action'),
                data: frm.serialize(),
                success: function(data) {
                    console.log('Submission was successful.');
                    console.log(data);
                    $("#myModal").modal("hide");
                },
                error: function(data) {
                    console.log('An error occurred.');
                    console.log(data);
                },
            });
        });

    });
</script>
<?php $__env->startSection('body'); ?>

<body data-topbar="dark" data-layout="horizontal">
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
    <div class="">
        
           <?php $__env->startComponent('components.breadcrumb'); ?>
            <?php $__env->slot('title'); ?> Lista De Citologia <?php $__env->endSlot(); ?>
            <?php $__env->slot('li_1'); ?> Dashboard <?php $__env->endSlot(); ?>
            <?php $__env->slot('li_2'); ?> Citologia <?php $__env->endSlot(); ?>
        <?php echo $__env->renderComponent(); ?>
        <!-- end page title -->
        
      
        <div class="card">
            <div class="card-body">
                
                  <div class="row">
                        <div class="col-lg-3">
            
                            <a href="<?php echo e(route('CreateCytology')); ?>">
                                <button type="button" class="btn btn-primary waves-effect waves-light mb-4">
                                    <i class="bx bx-plus font-size-16 align-middle mr-2"></i> <?php echo e(__('Nova Citologia')); ?>

                                </button>
                            </a>
            
                        </div>
                        <div class="col-lg-9 text-right">
            
                        </div>
                    </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="detail_box">
                            <table class="table sislac_table table_form">
                                <thead>
                                    <tr>
                                        <th>Name</th>

                                        <th>opções</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $__currentLoopData = $cytology; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td> <?php echo e($item->name); ?></td>

                                        <td>




                                            <a href="#" onclick="getsubItemApi(<?php echo e($item->id); ?>)" data-toggle="modal" data-target="subCytologyModal">

                                                <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0" title="Update Profile">
                                                    <i class="mdi mdi-plus"></i>
                                                </button>
                                            </a>

                                            <a href="<?php echo e(route('EditCytology',['id'=>$item->id])); ?>">
                                                <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0" title="Update Profile">
                                                    <i class="mdi mdi-lead-pencil"></i>
                                                </button>
                                            </a>
                                            <form action="<?php echo e(route('DeleteCytology',['id'=>$item->id])); ?>" method="POST" class="d-inline">
                                                <!--<?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>-->
                                                <?php echo e(csrf_field()); ?>

                                                <?php echo e(method_field('DELETE')); ?>

                                                <button type="submit" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0">
                                                    <i class="mdi mdi-trash-can"></i>
                                                </button>
                                            </form>
                                        </td>

                                    </tr>





                                    <!-- Modal -->
                                    <div class="modal fade" id="subCytologyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">




                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add Subtitle
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container">
                                                        <div class="row topRow" style="border-bottom: 1px solid #dfdfdf;
    margin-bottom: 15px;
    background: #f4f4f4;
    align-items: center;
    padding: 11px 0px 0px;">

                                                            <div class="col-lg-5 col-md-5 col-md-5">
                                                                <h5> Code</h5>
                                                            </div>
                                                            <div class="col-lg-5 col-md-5 col-md-5">
                                                                <h5> Description</h5>
                                                            </div>

                                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                                <h5> Action</h5>
                                                            </div>

                                                        </div>

                                                        <!-- Sub item Data -->
                                                        <div id="myelement">

                                                        </div>




                                                    </div>

                                                </div>
                                                <div class="modal-footer" id="subitemFooter">


                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <!-- Modal -->
                                    <div id="myModal" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add Cytology Subitems</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>


                                                <form id="cytologysubitemForm"">
                                                    <div class=" modal-body">

                                                    <div class="row">

                                                        <div class="col-lg-12">

                                                            <input type="number" placeholder="Write Code" name="code" class="form-control" max="2" />

                                                            <br>
                                                            <textarea type="text" placeholder="Type description" name="cytology_subitem" class="form-control"></textarea>

                                                            <input type="hidden" name="cytology_Id" value="<?php echo e($item->id); ?>" />
                                                        </div>

                                                    </div>

                                            </div>
                                            <div class="modal-footer" id="addsubitemFooter">

                                            </div>
                                        </div>

                                        </form>

                                    </div>
                        </div>


                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u931124233/domains/sislac.com.br/public_html/resources/views/exam/cytology.blade.php ENDPATH**/ ?>