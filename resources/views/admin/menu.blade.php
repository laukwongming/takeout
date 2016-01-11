
<ul class="nav navbar-nav side-nav">
	@can('create_account')
		<li>
			<a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Account Manage <i class="fa fa-fw fa-caret-down"></i></a>
			<ul id="demo" class="collapse">
				<li>
					<a href="#">Create Account</a>
				</li>
				<li>
					<a href="/admin/permission">Permission manage</a>
				</li>
			</ul>
		</li>
	@endcan

	@can('edit_forum')
		<li>
	        <a href="#">Edit the Forum</a>
		</li>
    @endcan

	@can('manage_money')
		<li>
			<a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
		</li>
	@endcan

</ul>