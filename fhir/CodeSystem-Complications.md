# Complications - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Complications**

## CodeSystem: Complications 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Complications | *Version*:2.13.0 |
| Active as of 2022-06-07 | *Computable Name*:Complications |

 
Complications - several procedures 

 This Code system is referenced in the content logical definition of the following value sets: 

* [BehandlingsResponsEvalueringLYFO](ValueSet-BehandlingsResponsEvalueringLYFO.md)
* [ComplicationAN](ValueSet-ComplicationAN.md)
* [ComplicationPO](ValueSet-ComplicationPO.md)
* [ComplicationsManifestation](ValueSet-ComplicationsManifestation.md)
* [ComplicationsManifestation202412](ValueSet-ComplicationsManifestation202412.md)
* [DoedsaarsagALD](ValueSet-DoedsaarsagALD.md)
* [DoedsaarsagDAMYDA](ValueSet-DoedsaarsagDAMYDA.md)
* [DoedsaarsagSAH](ValueSet-DoedsaarsagSAH.md)
* [HeartAttackSTEMIPosition](ValueSet-HeartAttackSTEMIPosition.md)
* [HeartAttackTypes](ValueSet-HeartAttackTypes.md)
* [HeartFailure](ValueSet-HeartFailure.md)
* [KomplikationerBehandlingDEGC](ValueSet-KomplikationerBehandlingDEGC.md)
* [KomplikationerDKRR](ValueSet-KomplikationerDKRR.md)
* [KomplikationerEndovaskulaerSAH](ValueSet-KomplikationerEndovaskulaerSAH.md)
* [KomplikationerKirurgiskSAH](ValueSet-KomplikationerKirurgiskSAH.md)
* [KomplikationerPeroperativeDKR](ValueSet-KomplikationerPeroperativeDKR.md)
* [KomplikationerVaskulaerDMPN](ValueSet-KomplikationerVaskulaerDMPN.md)
* [OperationssaarInfektionKAR](ValueSet-OperationssaarInfektionKAR.md)
* [OperationssaarKomplikationerKAR](ValueSet-OperationssaarKomplikationerKAR.md)
* [PostoperativeKomplikationerDCCG](ValueSet-PostoperativeKomplikationerDCCG.md)
* [TreatmentResponseALD](ValueSet-TreatmentResponseALD.md)
* [TreatmentResponseDAMYDA](ValueSet-TreatmentResponseDAMYDA.md)
* [TreatmentResponseEvaluationCLL](ValueSet-TreatmentResponseEvaluationCLL.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Complications",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
  "version" : "2.13.0",
  "name" : "Complications",
  "title" : "Complications",
  "status" : "active",
  "date" : "2022-06-07T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Complications - several procedures",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 77,
  "concept" : [
    {
      "code" : "ami",
      "display" : "AMI",
      "definition" : "AMI - Myocardieinfarkt"
    },
    {
      "code" : "chylothorax",
      "display" : "Chylothorax",
      "definition" : "Chylothorax"
    },
    {
      "code" : "fascierupture",
      "display" : "Fascieruptur",
      "definition" : "Fascieruptur"
    },
    {
      "code" : "ileus",
      "display" : "Ileus",
      "definition" : "Ileus"
    },
    {
      "code" : "intrathoracicbleeding",
      "display" : "Intrathorakal blødning",
      "definition" : "Intrathorakal blødning"
    },
    {
      "code" : "intraabdominalabscess",
      "display" : "Intraabdominal absces",
      "definition" : "Intraabdominal absces"
    },
    {
      "code" : "intraabdominalbleeding",
      "display" : "Intraabdominal blødning",
      "definition" : "Intraabdominal blødning"
    },
    {
      "code" : "pulmonaryembolism",
      "display" : "Lungeemboli",
      "definition" : "Lungeemboli"
    },
    {
      "code" : "perforation",
      "display" : "Perforation",
      "definition" : "Perforation",
      "concept" : [
        {
          "code" : "bloodvessel/aneurysm",
          "display" : "Kar/anurisme",
          "definition" : "Perforation af kar eller aneurisme"
        }
      ]
    },
    {
      "code" : "pleuraexudate",
      "display" : "Pleuraeksudat",
      "definition" : "Pleuraeksudat"
    },
    {
      "code" : "pneumonia",
      "display" : "Pneumoni",
      "definition" : "Pneumoni"
    },
    {
      "code" : "infection",
      "display" : "Sårinfektion",
      "definition" : "Sårinfektion"
    },
    {
      "code" : "anafylSchock",
      "display" : "Anafylaktisk reaktion/shock",
      "definition" : "Anafylaktisk reaktion/shock"
    },
    {
      "code" : "anInterrupt",
      "display" : "Anæstesi afbrudt",
      "definition" : "Anæstesi afbrudt"
    },
    {
      "code" : "appFailure",
      "display" : "Apparaturfejl",
      "definition" : "Apparaturfejl"
    },
    {
      "code" : "aspiration",
      "display" : "Aspiration",
      "definition" : "Aspiration"
    },
    {
      "code" : "duraptAcc",
      "display" : "Durapunktur accidentel",
      "definition" : "Durapunktur accidentel"
    },
    {
      "code" : "heartFail",
      "display" : "Hjertestop",
      "definition" : "Hjertestop"
    },
    {
      "code" : "huskeAN",
      "display" : "Huskeanæstesi",
      "definition" : "Huskeanæstesi"
    },
    {
      "code" : "malignHyp",
      "display" : "Malign Hypertermi mistanke",
      "definition" : "Malign Hypertermi mistanke"
    },
    {
      "code" : "medFail",
      "display" : "Medicineringsfejl",
      "definition" : "Medicineringsfejl"
    },
    {
      "code" : "neuMuscBlock",
      "display" : "Neuromuskulær blokade, forlænget virkning",
      "definition" : "Neuromuskulær blokade, forlænget virkning"
    },
    {
      "code" : "dentInj",
      "display" : "Tandskade",
      "definition" : "Tandskade"
    },
    {
      "code" : "mors",
      "display" : "Mors, uventet",
      "definition" : "Mors, uventet"
    },
    {
      "code" : "dissection",
      "display" : "Dissektion",
      "definition" : "Dissektion"
    },
    {
      "code" : "thromboembolic",
      "display" : "Tromboemboliske komplikationer",
      "definition" : "Tromboemboliske komplikationer som medfører infarkt inden for 24 timer"
    },
    {
      "code" : "groinbleeding",
      "display" : "Blødning fra lysken",
      "definition" : "Alvorlig blødning fra lysken"
    },
    {
      "code" : "mechanical",
      "display" : "Mekaniske",
      "definition" : "Mekaniske komplikationer"
    },
    {
      "code" : "bloodvesselocclusion",
      "display" : "Aflukning af kar",
      "definition" : "Aflukning af kar medførende infarkt indenfor 24 timer"
    },
    {
      "code" : "peroperativebleeding",
      "display" : "Peroperativ blødning",
      "definition" : "Livstruende peroperativ blødning, der ikke kan kontrolleres inden for få sekunder"
    },
    {
      "code" : "other",
      "display" : "Other",
      "definition" : "Other"
    },
    {
      "code" : "vascular-unspecific",
      "display" : "Vascular, unspecific",
      "definition" : "Vascular, unspecific"
    },
    {
      "code" : "infarction-unspecific",
      "display" : "Cerebral infarction and bleeding, unspecific",
      "definition" : "Cerebral infarction and bleeding, unspecific"
    },
    {
      "code" : "post_polypectomy_syndrome",
      "display" : "Post polypectomy syndrome",
      "definition" : "Post polypectomy syndrome / Postpolypektomisyndrom"
    },
    {
      "code" : "urinary_retention",
      "display" : "Urinary retention",
      "definition" : "Urinary retention / Urinretention"
    },
    {
      "code" : "medical",
      "display" : "Medical complication",
      "definition" : "Medical complication / Medicinsk komplikation"
    },
    {
      "code" : "movement_restriction",
      "display" : "Movement restriction",
      "definition" : "Movement restriction / Bevægelsesindskrænkning"
    },
    {
      "code" : "chronic_pain",
      "display" : "Chronic pain",
      "definition" : "Chronic pain / Kronisk smerte"
    },
    {
      "code" : "reoperation",
      "display" : "Reoperation",
      "definition" : "Reoperation"
    },
    {
      "code" : "rupture",
      "display" : "Rupture",
      "definition" : "Rupture / Ruptur",
      "concept" : [
        {
          "code" : "rupture_patella_ligament",
          "display" : "Rupture of patella ligament",
          "definition" : "Rupture of patella ligament / Ruptur af patellasene"
        }
      ]
    },
    {
      "code" : "thrombosis",
      "display" : "Thrombosis",
      "definition" : "Thrombosis / Trombose",
      "concept" : [
        {
          "code" : "dvt",
          "display" : "Dyb vene trombose",
          "definition" : "Dyb vene trombose"
        },
        {
          "code" : "abdominal",
          "display" : "Abdominal /hepatisk/milt trombose",
          "definition" : "Abdominal /hepatisk/milt trombose"
        }
      ]
    },
    {
      "code" : "marrow_relapse",
      "display" : "Marrow relapse",
      "definition" : "Marrow relapse / Marv relaps"
    },
    {
      "code" : "rising_m_component",
      "display" : "Rising M-component",
      "definition" : "Rising M-component / Stigende M-komponent"
    },
    {
      "code" : "hypercalcemia",
      "display" : "Hypercalcemia",
      "definition" : "Hypercalcemia / Hypercalcæmi"
    },
    {
      "code" : "osteolytic_foci",
      "display" : "Progressive osteolytic foci",
      "definition" : "Progressive osteolytic foci / Progression af osteolytiske foci"
    },
    {
      "code" : "medullary_cross_sectional_syndrome",
      "display" : "Medullary cross-sectional syndrome",
      "definition" : "Medullary cross-sectional syndrome / Medullært tværsnitssyndrom"
    },
    {
      "code" : "extremedullery_myeloma",
      "display" : "Extremedullary Myeloma",
      "definition" : "Extremedullary Myeloma / Ekstramedullære Myelomer"
    },
    {
      "code" : "plasma_cell_leukemia",
      "display" : "Plasma cell leukemia",
      "definition" : "Plasma cell leukemia / Plasmacelle leukæmi"
    },
    {
      "code" : "uremia",
      "display" : "Uremia",
      "definition" : "Uremia / Uræmi / SNOMED-CT: 44730006",
      "concept" : [
        {
          "code" : "uremia_clinically",
          "display" : "Uremia (clinically significant)",
          "definition" : "Uremia (clinically significant) / Uræmi (klinisk betydende)"
        },
        {
          "code" : "uremia_dialysis",
          "display" : "Uremia (chronic dialysis requiring)",
          "definition" : "Uremia (chronic dialysis requiring) / Uræmi (kronisk dialysekrævende)"
        }
      ]
    },
    {
      "code" : "amyloidosis",
      "display" : "Amyloidosis",
      "definition" : "Amyloidosis / Amyloidose / SNOMED-CT: 17602002"
    },
    {
      "code" : "neuropathy",
      "display" : "Neuropathy",
      "definition" : "Neuropathy / Neuropati / SNOMED-CT: 386033004"
    },
    {
      "code" : "hyperviscosity",
      "display" : "Hyperviscosity",
      "definition" : "Hyperviscosity / Hyperviskositet / SNOMED-CT: 64088006"
    },
    {
      "code" : "tci",
      "display" : "TCI",
      "definition" : "TCI"
    },
    {
      "code" : "bleeding",
      "display" : "Bleeding",
      "definition" : "Bleeding / Blødning"
    },
    {
      "code" : "apoplexia_cerebri",
      "display" : "Apopleksi cerebri",
      "definition" : "Apopleksi cerebri"
    },
    {
      "code" : "hematoma",
      "display" : "Surgery required hematoma",
      "definition" : "Surgery required hematoma / operationskrævende hæmatom"
    },
    {
      "code" : "lymph_leakage",
      "display" : "Lymph leakage over 2 days",
      "definition" : "Lymph leakage over 2 days / lymfesiven over 2 døgn (forlænger indlæggelsen)"
    },
    {
      "code" : "necrosis",
      "display" : "Surgery required necrosis",
      "definition" : "Surgery required necrosis / operationskrævende randnekrose"
    },
    {
      "code" : "lymphocele",
      "display" : "Surgery required lymphocele",
      "definition" : "Surgery required lymphocele / operationskrævende lymfocele"
    },
    {
      "code" : "superficial_subcutaneous_infection",
      "display" : "Superficial/subcutaneous infection",
      "definition" : "overfladisk / subcutan infektion (ved antibiotika eller operation)"
    },
    {
      "code" : "deep_prosthesis_infection",
      "display" : "Deep/prosthesis infection",
      "definition" : "Deep/prosthesis infection / dyb / protese infektion (ved antibiotika eller operation)"
    },
    {
      "code" : "segment_elevation_myocardial_infarction",
      "display" : "Type of heart attack",
      "definition" : "Type of heart attack that mainly affects your hearts lower chambers"
    },
    {
      "code" : "bundle_branch_block_myocardial_infarction",
      "display" : "Type of heart attack",
      "definition" : "--"
    },
    {
      "code" : "non_segment_elevation_myocardial_infarction",
      "display" : "Type of heart attack",
      "definition" : "--"
    },
    {
      "code" : "unstable_agina",
      "display" : "Heart failure?",
      "definition" : "--"
    },
    {
      "code" : "rulled_out_heart_attack",
      "display" : "No heart attack/failur",
      "definition" : "--"
    },
    {
      "code" : "anterior_segment_elevation_myocardial_infarction",
      "display" : "Postion",
      "definition" : "--"
    },
    {
      "code" : "non_anterior_segment_elevation_myocardial_infarction",
      "display" : "Position",
      "definition" : "--"
    },
    {
      "code" : "heart_failur_class_2",
      "display" : "Class 2 heartfailure",
      "definition" : "--"
    },
    {
      "code" : "heart_failur_class_3",
      "display" : "Class 3 heartfailure",
      "definition" : "--"
    },
    {
      "code" : "heart_failur_class_4",
      "display" : "Class 4 heartfailure",
      "definition" : "--"
    }
  ]
}

```
