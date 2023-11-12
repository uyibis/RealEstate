<template>
    <div>
        <div class="dropdown">
            <button
                class="btn btn-secondary dropdown-toggle"
                type="button"
                id="listingSelector"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
            >
                {{ selectedOption }}
            </button>
            <div class="dropdown-menu" aria-labelledby="listingSelector">
                <a
                    class="dropdown-item"
                    href="#"
                    @click="selectOption('Land')"
                >
                    Land Listing
                </a>
                <a
                    class="dropdown-item"
                    href="#"
                    @click="selectOption('House')"
                >
                    House Listing
                </a>
                <a
                    class="dropdown-item"
                    href="#"
                    @click="selectOption('Apartment')"
                >
                    Apartment Listing
                </a>
            </div>
        </div>

        <component :is="selectedComponent" />
    </div>
</template>

<script>
export default {
    name: "ListingFormComponent",
    data() {
        return {
            selectedOption: 'Select Listing Type',
            selectedComponent: null,
        };
    },
    methods: {
        selectOption(option) {
            this.selectedOption = option;

            // Set the component based on the selected option
            switch (option) {
                case 'Land':
                    this.selectedComponent = 'LandComponent';
                    break;
                case 'House':
                    this.selectedComponent = 'HouseComponent';
                    break;
                case 'Apartment':
                    this.selectedComponent = 'ApartmentComponent';
                    break;
                default:
                    this.selectedComponent = null;
            }
        },
    },
}
</script>

<style scoped>

</style>
