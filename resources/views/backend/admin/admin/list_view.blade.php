
<div class="table-responsive">
    <table class="table table-hover m-b-0 c_list table-bordered table-striped table-hover js-basic-example dataTable" id="tableId">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Address</th>
                <th>Status</th>
                <th>Created By</th>
                <th>Created On</th>
                <th>Action</th>
            </tr>
        </thead>
            <tbody>
            <?php $n=1; foreach ($data as $item) {
                $user = App\Models\AdminModel::findAdmin($item->created_by); ?>
            <tr>
                <td><?=$n?></td>
                <td>
                    <img src="{{ asset('assets/avatar.jpg') }}" class="rounded-circle avatar" alt="">
                    <p class="c_name"><?= $item->fname.' '.$item->mname.' '.$item->lname ?></p>
                </td>
                <td>
                    <div><a href="tel:<?= $item->phone ?>" class="text-info"><?= $item->phone ?></a></div>
                    <div><a href="mailto:<?= $item->email ?>"><?= $item->email ?></a></div>
                </td>
                <td>
                <?php if($item->status==0){ ?>
                <span class="badge badge-success m-l-10 hidden-sm-down">Active</span></td>
                <?php }else{ ?>
                <span class="badge badge-default m-l-10 hidden-sm-down">Inactive</span></td>
                <?php } ?>
                </td>
                <td><?= $user->fname.' '.$user->lname ?></td>
                <td><?= \Carbon\Carbon::parse($item->created_at)->format('d/m/Y | h:i A')?></td>
                <td>
                    <button title="Edit Action"  onclick="editAdmin('<?=$item->id?>')" class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-edit"></i></button>
                    <button title="Delete Action" onclick="deleteAdmin('<?=$item->id?>')"  class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-delete"></i></button>
                </td>
            </tr>
            <?php  $n++; } ?>
        </tbody>
    </table>
</div>

@include('backend.dependences.datatable')

