<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Admin\Entities\JobType;

class JobTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobType::truncate();

        // MOT

        $mot_Array = array(
            array("val0" => "MOT"),
            array("val0" => "MOT - All Classes"),
            array("val0" => "MOT - Class 1"),
            array("val0" => "MOT - Class 2"),
            array("val0" => "MOT - Class 3"),
            array("val0" => "MOT - Class 4"),
            array("val0" => "MOT - Class 5"),
            array("val0" => "MOT - Class 7")
        );

        foreach ($mot_Array as $key => $mot) {

            if ($key == 0) {

                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => 0]);
            } else {

                $mots = JobType::where('name', 'MOT')->first();
                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => $mots['id']]);
            }
        }

        // Servicing

        $mot_Array = array(
            array("val0" => "Servicing"),
            array("val0" => "All Servicing"),
            array("val0" => "Basic Service"),
            array("val0" => "Interim Service"),
            array("val0" => "Full Service"),
            array("val0" => "Major Service"),
            array("val0" => "Oil Service"),
            array("val0" => "Air Conditioning Servicing"),
            array("val0" => "Hybrid System Service"),
            array("val0" => "Electric Vehicle Servicing"),
        );

        foreach ($mot_Array as $key => $mot) {

            if ($key == 0) {

                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => 0]);
            } else {

                $mots = JobType::where('name', 'Servicing')->first();
                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => $mots['id']]);
            }
        }

        // Checks & Inspection

        $mot_Array = array(
            array("val0" => "Checks & Inspection"),
            array("val0" => "Pre-MOT"),
            array("val0" => "Pre-Purchase"),
            array("val0" => "Post-Purchase"),
            array("val0" => "Pre-PCO"),
            array("val0" => "Winter Safety"),
            array("val0" => "Before a Journey")
        );

        foreach ($mot_Array as $key => $mot) {

            if ($key == 0) {

                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => 0]);
            } else {

                $mots = JobType::where('name', 'Checks & Inspection')->first();
                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => $mots['id']]);
            }
        }
        // Diagnostic

        $mot_Array = array(
            array("val0" => "Diagnostic"),
            array("val0" => "All Diagnostics"),
            array("val0" => "Engine Management"),
            array("val0" => "Air Bag"),
            array("val0" => "ABS Diagnostic"),
            array("val0" => "Hybrid System Diagnostic"),
            array("val0" => "Electric Vehicle Diagnostic"),
            array("val0" => "Electrical Fault Diagnostic"),
            array("val0" => "Convertible Roof Fault"),
        );

        foreach ($mot_Array as $key => $mot) {

            if ($key == 0) {

                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => 0]);
            } else {

                $mots = JobType::where('name', 'Diagnostic')->first();
                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => $mots['id']]);
            }
        }
        // Bodywork Repair

        $mot_Array = array(
            array("val0" => "Bodywork Repair"),
            array("val0" => "All bodyworks"),
            array("val0" => "Smart Repairs"),
            array("val0" => "Scratches"),
            array("val0" => "Dents"),
            array("val0" => "Paintwork"),
            array("val0" => "Polishing"),
            array("val0" => "Correction"),
            array("val0" => "Accident Repair"),
            array("val0" => "Collision Repair"),
            array("val0" => "Mobile Bodywork Repair"),
            array("val0" => "Insurance Repairs"),
        );

        foreach ($mot_Array as $key => $mot) {

            if ($key == 0) {

                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => 0]);
            } else {

                $mots = JobType::where('name', 'Bodywork Repair')->first();
                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => $mots['id']]);
            }
        }

        // Tyres

        $mot_Array = array(
            array("val0" => "Tyres"),
            array("val0" => "All Tyres"),
            array("val0" => "New Tyres"),
            array("val0" => "Budget Tyres"),
            array("val0" => "Winter Tyres"),
            array("val0" => "Run-flat Tyres"),
            array("val0" => "Performance Tyres"),
            array("val0" => "Used Tyres"),
            array("val0" => "Tyre Puncture Repair"),
        );

        foreach ($mot_Array as $key => $mot) {

            if ($key == 0) {

                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => 0]);
            } else {

                $mots = JobType::where('name', 'Tyres')->first();
                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => $mots['id']]);
            }
        }
        // Allow Wheels

        $mot_Array = array(
            array("val0" => "Allow Wheels"),
            array("val0" => "All Alloy Wheels"),
            array("val0" => "New Alloy Wheels"),
            array("val0" => "Refurbished Alloy wheels"),
            array("val0" => "Alloy Wheel Repairs")
        );
        foreach ($mot_Array as $key => $mot) {

            if ($key == 0) {

                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => 0]);
            } else {

                $mots = JobType::where('name', 'Allow Wheels')->first();
                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => $mots['id']]);
            }
        }
        // Detailing

        $mot_Array = array(
            array("val0" => "Detailing"),
            array("val0" => "All Detailing"),
            array("val0" => "Vehicle Detailing"),
            array("val0" => "Interior Detailing"),
            array("val0" => "Exterior Detailing"),
            array("val0" => "Wrapping"),
            array("val0" => "Window Tinting"),
            array("val0" => "Graphics"),
            array("val0" => "Paint Protection"),
            array("val0" => "Coatings"),
            array("val0" => "Exhausts"),
            array("val0" => "Alloy Wheels"),
            array("val0" => "Restoration"),
            array("val0" => "Correction"),
        );
        foreach ($mot_Array as $key => $mot) {

            if ($key == 0) {

                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => 0]);
            } else {

                $mots = JobType::where('name', 'Detailing')->first();
                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => $mots['id']]);
            }
        }

        // Interior

        $mot_Array = array(
            array("val0" => "Interior"),
            array("val0" => "All Interior"),
            array("val0" => "Leather Seat Repair"),
            array("val0" => "Leather Seat Restoration"),
            array("val0" => "Leather Interior Bespoking"),
            array("val0" => "Interior Bespoking"),
            array("val0" => "Upholstery"),
            array("val0" => "Leather Upholstery Retrimming"),
            array("val0" => "Fabric Upholstery"),
            array("val0" => "Leather Cleaning"),
            array("val0" => "Seat Cover Fitting")
        );
        foreach ($mot_Array as $key => $mot) {

            if ($key == 0) {

                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => 0]);
            } else {

                $mots = JobType::where('name', 'Interior')->first();
                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => $mots['id']]);
            }
        }
        // Glass & Window

        $mot_Array = array(
            array("val0" => "Glass & Window"),
            array("val0" => "All Glass & Windows"),
            array("val0" => "Windscreen Repair"),
            array("val0" => "Windscreen Replacement"),
            array("val0" => "Windscreen Recalibration"),
            array("val0" => "Rear Window"),
            array("val0" => "Side Window")
        );
        foreach ($mot_Array as $key => $mot) {

            if ($key == 0) {

                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => 0]);
            } else {

                $mots = JobType::where('name', 'Glass & Window')->first();
                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => $mots['id']]);
            }
        }
        // Breakdown & Recovery

        $mot_Array = array(
            array("val0" => "Breakdown & Recovery"),
            array("val0" => "Breakdown"),
            array("val0" => "Tow Recovery")
        );
        foreach ($mot_Array as $key => $mot) {

            if ($key == 0) {

                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => 0]);
            } else {

                $mots = JobType::where('name', 'Breakdown & Recovery')->first();
                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => $mots['id']]);
            }
        }

        // Warranty Job

        $mot_Array = array(
            array("val0" => "Warranty Job"),
            array("val0" => "All warranty jobs")
        );
        foreach ($mot_Array as $key => $mot) {

            if ($key == 0) {

                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => 0]);
            } else {

                $mots = JobType::where('name', 'Warranty Job')->first();
                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => $mots['id']]);
            }
        }
        // Car Wash & Valet

        $mot_Array = array(
            array("val0" => "Car Wash & Valet"),
            array("val0" => "Car wash"),
            array("val0" => "Valet"),
            array("val0" => "Exterior Wash"),
            array("val0" => "Inside & Outside"),
            array("val0" => "Mini Valet"),
            array("val0" => "Full Valet"),
            array("val0" => "Hand Car Wash"),
            array("val0" => "Body Wax"),
            array("val0" => "Engine Bay Wash")
        );
        foreach ($mot_Array as $key => $mot) {

            if ($key == 0) {

                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => 0]);
            } else {

                $mots = JobType::where('name', 'Car Wash & Valet')->first();
                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => $mots['id']]);
            }
        }
        // Performance & Tuning

        $mot_Array = array(
            array("val0" => "Performance & Tuning"),
            array("val0" => "Performance"),
            array("val0" => "Exhaust"),
            array("val0" => "Intercooler"),
            array("val0" => "Power"),
            array("val0" => "Fuel Economy"),
            array("val0" => "Remap"),
            array("val0" => "ECU"),
            array("val0" => "ECU Remap"),
            array("val0" => "Carbon Cleaning"),
            array("val0" => "DPF Cleaning"),
            array("val0" => "Tuning")
        );
        foreach ($mot_Array as $key => $mot) {

            if ($key == 0) {

                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => 0]);
            } else {

                $mots = JobType::where('name', 'Performance & Tuning')->first();
                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => $mots['id']]);
            }
        }
        // Securiy

        $mot_Array = array(
            array("val0" => "Securiy"),
            array("val0" => "All security"),
            array("val0" => "Alarm Systems"),
            array("val0" => "Immobilisers"),
            array("val0" => "Ghost Immobiliser"),
            array("val0" => "Tracking Systems"),
            array("val0" => "Dash Cams & CCTV"),
            array("val0" => "Parking Sensors"),
            array("val0" => "Reversing Cameras")
        );
        foreach ($mot_Array as $key => $mot) {

            if ($key == 0) {

                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => 0]);
            } else {

                $mots = JobType::where('name', 'Securiy')->first();
                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => $mots['id']]);
            }
        }
        // Audio & Sound

        $mot_Array = array(
            array("val0" => "Audio & Sound"),
            array("val0" => "All Audio & Sound Solutions"),
            array("val0" => "Sterios"),
            array("val0" => "Screens"),
            array("val0" => "Satellite Navigation"),
            array("val0" => "Speakers"),
            array("val0" => "Subwoofers"),
            array("val0" => "Bass Boxes"),
            array("val0" => "Amplifiers")
        );
        foreach ($mot_Array as $key => $mot) {

            if ($key == 0) {

                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => 0]);
            } else {

                $mots = JobType::where('name', 'Audio & Sound')->first();
                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => $mots['id']]);
            }
        }
        // Keys

        $mot_Array = array(
            array("val0" => "Keys"),
            array("val0" => "All Vehicle Key Solutions"),
            array("val0" => "Car Key Replacement"),
            array("val0" => "Spare Car Keys"),
            array("val0" => "Car Key Repair"),
            array("val0" => "Car Key Programming"),
            array("val0" => "Car Key Cutting"),
            array("val0" => "Car Lock Repair"),
            array("val0" => "Car Lock Replacement")
        );
        foreach ($mot_Array as $key => $mot) {

            if ($key == 0) {

                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => 0]);
            } else {

                $mots = JobType::where('name', 'Keys')->first();
                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => $mots['id']]);
            }
        }


        // Electrical

        $mot_Array = array(
            array("val0" => "Electrical"),
            array("val0" => "All Electrical Repairs & Diagnostics"),
            array("val0" => "Electrical Faults"),
            array("val0" => "Starting"),
            array("val0" => "Charging"),
            array("val0" => "Battery drain"),
            array("val0" => "Alternator System faults"),
            array("val0" => "Electric windows"),
            array("val0" => "Windscreen wipers & washers"),
            array("val0" => "Electronic power steering"),
            array("val0" => "Central locking System"),
            array("val0" => "Air conditioning"),
            array("val0" => "Electric Mirrors"),
            array("val0" => "Power folding mirrors"),
            array("val0" => "Electric Park Brake (EPB)"),
            array("val0" => "Parking Sensors"),
            array("val0" => "Light System Faults"),
            array("val0" => "Lighting System Faults"),
            array("val0" => "Trailer Sockets"),
            array("val0" => "Electric seats"),
            array("val0" => "Heated Seats"),
            array("val0" => "Audio Systems"),
            array("val0" => "Alarms & immobilisers"),
            array("val0" => "ECU Faults"),
            array("val0" => "Instrument Cluster"),
            array("val0" => "Programming & Coding"),
            array("val0" => "Airbag System"),
            array("val0" => "Engine Managament"),
            array("val0" => "Engine Service Light"),
            array("val0" => "Control Module Fault"),
            array("val0" => "Control Module Replacement"),
            array("val0" => "Control Module Coding"),
            array("val0" => "Sensor Replacement"),
            array("val0" => "Sensor Re-coding"),
            array("val0" => "ABS"),
        );

        foreach ($mot_Array as $key => $mot) {

            if ($key == 0) {

                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => 0]);
            } else {

                $mots = JobType::where('name', 'Electrical')->first();
                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => $mots['id']]);
            }
        }

        // Mechanical Repair

        $mot_Array = array(
            array("val0" => "Mechanical Repair"),
            array("val0" => "All Mechanical Repairs"),
            array("val0" => "Brakes"),
            array("val0" => "All Brake Works"),
            array("val0" => "Brake Pads"),
            array("val0" => "Brake Discs"),
            array("val0" => "ABS"),
            array("val0" => "Handbrake"),
            array("val0" => "Brake Hydraulics"),
            array("val0" => "Brake Calipers"),
            array("val0" => "Engine"),
            array("val0" => "All Engine Works"),
            array("val0" => "New Engine"),
            array("val0" => "Engine Reconditioning"),
            array("val0" => "Engine Rebuild"),
            array("val0" => "Engine Belts & Chains"),
            array("val0" => "Timing Belt"),
            array("val0" => "Timing Chain"),
            array("val0" => "Drive Belt"),
            array("val0" => "Ignition"),
            array("val0" => "All Ignition Works"),
            array("val0" => "Glow Plugs"),
            array("val0" => "Ignition Coil"),
            array("val0" => "Spark Plugs"),
            array("val0" => "Fuel & Engine Management"),
            array("val0" => "All Fuel & Engine Management Works"),
            array("val0" => "Fuel Injectors"),
            array("val0" => "Fuel Pump"),
            array("val0" => "Fuel Tank"),
            array("val0" => "Sensors"),
            array("val0" => "Valves"),
            array("val0" => "Turbo"),
            array("val0" => "Suspension"),
            array("val0" => "All Suspension Works"),
            array("val0" => "Air Suspension"),
            array("val0" => "Anti Roll Bar"),
            array("val0" => "Suspension Bushes"),
            array("val0" => "Coil Springs"),
            array("val0" => "Engine Mount"),
            array("val0" => "Suspension Mount"),
            array("val0" => "Axle"),
            array("val0" => "Shock Absorber"),
            array("val0" => "Suspension Arm & Joints"),
            array("val0" => "Steering"),
            array("val0" => "All Steering Works"),
            array("val0" => "Steering Racks & Mounts"),
            array("val0" => "Track Rods & Ends"),
            array("val0" => "Power Steering"),
            array("val0" => "Transmission"),
            array("val0" => "All Transmission Works"),
            array("val0" => "Clutch"),
            array("val0" => "All Clutch Works"),
            array("val0" => "Flywheel"),
            array("val0" => "Gearbox"),
            array("val0" => "All Gearbox Works"),
            array("val0" => "Driveshafts"),
            array("val0" => "Wheel Bearings & Hubs"),
            array("val0" => "Cooling"),
            array("val0" => "All Cooling Works"),
            array("val0" => "Coolant Leaks"),
            array("val0" => "Expansion Tank"),
            array("val0" => "Fan"),
            array("val0" => "Intercooler"),
            array("val0" => "Radiator"),
            array("val0" => "Water Pump"),
            array("val0" => "Thermostat"),
            array("val0" => "Cooling Switch & Sensors"),
            array("val0" => "Air Conditioning"),
            array("val0" => "All Air Conditioning Works"),
            array("val0" => "Air Conditioning Leak "),
            array("val0" => "Air Conditioning Re-gas"),
            array("val0" => "Heating"),
            array("val0" => "All Heating Works"),
            array("val0" => "Electrical"),
            array("val0" => "All Electrical Works"),
            array("val0" => "Alternator"),
            array("val0" => "Starter Motor"),
            array("val0" => "Battery"),
            array("val0" => "Lighting"),
            array("val0" => "All Lighting Works"),
            array("val0" => "Bulbs"),
            array("val0" => "Lamps"),
            array("val0" => "Headlights"),
            array("val0" => "Rear Lights"),
            array("val0" => "Exhaust"),
            array("val0" => "All Exhaust Works"),
            array("val0" => "Exhaust System"),
            array("val0" => "Exhaust Sensors"),
            array("val0" => "DPF Diesel Particulate Filter"),
            array("val0" => "Catalytic Converter"),
            array("val0" => "Wiper"),
            array("val0" => "All Wiper Works"),
            array("val0" => "Wiper Arm & Motor"),
            array("val0" => "Washer System & Pump"),
            array("val0" => "Wheel & Tyres"),
            array("val0" => "Programming & Coding"),
        );

        foreach ($mot_Array as $key => $mot) {

            if ($key == 0) {

                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => 0]);
            } else {

                $mots = JobType::where('name', 'Mechanical Repair')->first();
                $role = JobType::create(['name' => $mot['val0'], 'parent_id' => $mots['id']]);
            }
        }
    }
}
