    <nav class="nav nav-bar" id='nav1'>

        <div> 
            
            <a href="#" class="nav_logo"><img src="student/assets/images/kmu_logo.png" alt="Your Logo" width="80" height="80"><span class="nav_name">KMU<br>Accomodation System</span> </a>
            <div class="#"> <a href="#" class="nav_link"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Home</span> </a> 
                <a href="#" class="nav_link" > <i class='bx bx-user nav_icon'></i> <span class="nav_name">Profile</span> </a> 
                <a href="#" class="nav_link" onclick="showApplyForm()"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Room Application</span> </a> 
                <a href="#" class="nav_link" onclick="showAssignedRoom()"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">View Room</span> </a> 
                <a href="#" class="nav_link" onclick="showInventory()"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">View Inventory</span> </a>
                <a href="#" class="nav_link" onclick="reportQuery()"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Report Queries</span> </a>
            
            </div> 
            <a href="#" class="nav_link"> <i class='bx bx-back nav_icon'></i> <span class="nav_name">Back to main</span> </a>
            <a href="{{route('logout')}}" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">LogOut</span></a>
    </nav>