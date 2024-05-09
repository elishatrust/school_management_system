<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="tableId">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Type</th>
                <th>Status</th>
                <th>Created By</th>
                <th>Created On</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Type</th>
                <th>Status</th>
                <th>Created By</th>
                <th>Created On</th>
                <th>Action</th>
            </tr>
        </tfoot>
        <tbody>
            <?php $n=1; foreach ($data as $item) {
                $user = App\Models\AdminModel::findAdmin($item->created_by); ?>
            <tr>
                <td><?= $n ?></td>
                <td><?= $item->name ?></td>
                <td><?= $item->type ?></td>
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
                    <div class="btn-group" role="group" aria-label="Basic outlined example">

                        <button type="button" title="Edit Action"  onclick="editSubject('<?=$item->id?>')" class="btn btn-outline-primary">
                        <i class="zmdi zmdi-edit text-success"></i></button>

                        <button type="button" title="Delete Action" onclick="deleteSubject('<?=$item->id?>')" class="btn btn-outline-danger ">
                        <i class="zmdi zmdi-delete text-danger "></i></button>

                    </div>
                </td>
            </tr>
            <?php  $n++; } ?>
        </tbody>
    </table>
</div>


@include('backend.dependences.datatable')
