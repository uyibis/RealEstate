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

        <div v-if="selectedOption === 'Land'">
            <LandListingForm type="land" :form_url="form_url" :p_realtors="p_realtors" :gallery_url="gallery_url" :uploader_url="uploader_url"/>
        </div>

        <div v-if="selectedOption === 'House'">
            <BuildingListingForm type="building" :form_url="form_url" :p_realtors="p_realtors" :gallery_url="gallery_url" :uploader_url="uploader_url"/>
        </div>

        <div v-if="selectedOption === 'Apartment'">
            <ApartmentListingForm type="apartment" :form_url="form_url" :p_realtors="p_realtors" :gallery_url="gallery_url" :uploader_url="uploader_url"/>
        </div>
    </div>
</template>

<script>
import BuildingListingForm from "../BuildingFormListing/BuildingListingForm.vue";
import LandListingForm from "../LandFormListing/LandListingForm.vue";
import ApartmentListingForm from "../RentFormListing/ApartmentListingForm.vue";
export default {
    name: "listingForm",
    props:['form_url','p_realtors','gallery_url','uploader_url'],
    components:{BuildingListingForm,LandListingForm,ApartmentListingForm},
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
.video-thumbnail {
    max-width: 100%;
    height: 10em;
    z-index: -1;
}
img{
    height: 10em;
}
.image-list {
    display: flex;
    flex-wrap: wrap;
}
</style>
