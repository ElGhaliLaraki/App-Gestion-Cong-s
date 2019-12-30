<div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="../img/message/1.png" alt="" />
                    </a>
                    <h3><?php echo $data->nom . " " . $data->prenom; ?></h3>
                    <p><?php if($data->type == "rh") echo "Responsable RH"; else echo "Employé"; ?></p>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
					<?php
						if($data->type == "rh"){
					?>
                        <li class="nav-item">
                            <a href="index.php?page=home"><i class="fa big-icon fa-home"></i> <span class="mini-dn"> Home</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-users"></i> <span class="mini-dn"> Employes</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="index.php?page=employe" class="dropdown-item"> Liste des employes</a>
                                <a href="index.php?page=employe_add" class="dropdown-item"> Ajouter un employe</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-leaf"></i> <span class="mini-dn"> Demandes conge</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="index.php?page=conge" class="dropdown-item"> Liste des demandes de conge</a>
                            </div>
                        </li>
						 <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
						 <i class="fa big-icon fa-server"></i> <span class="mini-dn"> Types conges</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="index.php?page=typeconge" class="dropdown-item"> Liste des types de conges</a>
                                <a href="index.php?page=typeconge_add" class="dropdown-item"> Ajouter un type de conge</a>
                            </div>
                        </li>
					<?php
						}else{
					?>		
						<li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-leaf"></i> <span class="mini-dn"> Mes Conges</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="index.php?page=conge_emp" class="dropdown-item"> Liste des conges</a>
                                <a href="index.php?page=conge_emp_add" class="dropdown-item"> Ajouter une demande conge</a>
                            </div>
                        </li>
					<?php					
						}
					?>
						<li class="nav-item">
                            <a href="index.php?page=profile"><i class="fa fa-user" aria-hidden="true"></i><span class="mini-dn"> Mon Profile</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
	
	