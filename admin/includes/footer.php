    </main>
    <script>       
        function openSidenav() {
            document.getElementById("sidenav").style.left = "0";
            document.getElementById("main").style.marginLeft = "0";
        }

        function closeSidenav() {
            document.getElementById("sidenav").style.left = "-250px";
            document.getElementById("main").style.marginLeft = "0";
            
            const dropdowns = document.querySelectorAll('.dropdown-content');
                dropdowns.forEach(dropdown => {
                 dropdown.classList.remove('show');      
            });
        }
        
        function toggleDropdown(id) {
            const dropdowns = document.querySelectorAll('.dropdown-content');
                dropdowns.forEach(dropdown => {
                    if (dropdown.id !== id) {
                        dropdown.classList.remove('show');
                    }
            });

            const dropdown = document.getElementById(id);
            dropdown.classList.toggle("show");
        }
    </script>
</body>
</html>