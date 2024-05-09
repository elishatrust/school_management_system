<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Address</th>
                <th>Admission No./Date</th>
                <th>DoB</th>
                <th>Status</th>
                <th>Created By/On</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Address</th>
                <th>Admission No./Date</th>
                <th>DoB</th>
                <th>Status</th>
                <th>Created By/On</th>
                <th>Action</th>
            </tr>
        </tfoot>
        <tbody>
            <?php $n=1; foreach ($data as $item) {
                $user = App\Models\AdminModel::findAdmin($item->created_by); ?>

            <tr>
                <td><?=$n?></td>
                <td>
                    <img src="{{ asset('assets/avatar.jpg') }}" style="width:40px;box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.5);border: 1px solid #fff;" class="rounded-circle avatar" alt="">
                    <small class="p-2 text-muted"><?= $item->gender ?></small>
                    <p class="mt-2"><?= $item->fname.' '.$item->mname.' '.$item->lname ?></p>
                </td>
                <td>
                    <span><a href="tel:<?= $item->phone ?>" class="text-info mb-2"><?= $item->phone ?></a></span>
                    <p class="mt-2"><a href="mailto:<?= $item->email ?>"><?= $item->email ?></a></p>
                </td>
                <td>
                    <span><?= $item->admission_no ?></span>
                    <p class="mt-2"><?= $item->admission_date ?></p>
                </td>
                <td><?= $item->dob ?></td>
                <td>
                <?php if($item->status==0){ ?>
                <span class="badge badge-success m-l-10 hidden-sm-down">Active</span></td>
                <?php }else{ ?>
                <span class="badge badge-default m-l-10 hidden-sm-down">Inactive</span></td>
                <?php } ?>
                </td>
                <td>
                    <span><?= $user->fname.' '.$user->lname ?></span>
                    <p class="mt-2"><?= \Carbon\Carbon::parse($item->created_at)->format('d/m/Y | h:i A')?></p>
                </td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic outlined example">

                        <button type="button" title="Edit Action"  onclick="editStudent('<?=$item->id?>')" class="btn btn-outline-primary">
                        <i class="zmdi zmdi-edit text-success"></i></button>

                        <button type="button" title="Delete Action" onclick="deleteStudent('<?=$item->id?>')" class="btn btn-outline-danger ">
                        <i class="zmdi zmdi-delete text-danger "></i></button>

                    </div>
                </td>
            </tr>
            <?php  $n++; } ?>
        </tbody>
    </table>
</div>


@include('backend.dependences.datatable')
