<template>
        <form action="" method="post" class="form">
        
        <div class="form-group">
            <label for="payPeriodCycle" class="form-control">Pay Period Cycle *</label>
            <input type="number" class="form-control" id="payPeriodCycle" placeholder="monthly" min="1" max="12" name="payPeriodCycle">
        </div>
        <div class="form-group">
            <label for="name" class="form-control">Name (optional)</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        
        <div class="form-group">
            <label for="firstPeriodEndDate" class="form-control">First Period End Date *</label>
            <input type="date" name="firstPeriodEndDate" id="firstPeriodEndDate" class="form-control" placholder="DD MM YYYY">
        </div>
        <div class="form-group">
            <label for="lastDayMonth" class="form-control">Last Day of Month *</label>
            <input type="date" name="lastDayMonth" id="lastDayMonth" class="form-control" placholder="DD MM YYYY">
        </div>
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
        </div>
        
        <button type="submit" class="btn btn-success"> Save</button>
        <button type="reset" class="btn btn-danger">Cancel</button>
    </form>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
