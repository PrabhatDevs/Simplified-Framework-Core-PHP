
    <!-- Footer -->
    <footer class="bg-dark text-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>A simple PHP Framework Developed with ❤️ by Prabhat Yadav.</h5>
                </div>
                <div class="col-md-6 text-md-end">
                    <p>&copy; <?php echo date('Y'); ?> PHP Framework.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Include script using base_url() function -->
     <script src="<?=base_url('assets/js/script.js')?>"></script>
</body>
</html>