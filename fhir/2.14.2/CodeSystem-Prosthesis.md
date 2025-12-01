# Prosthesis - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Prosthesis**

## CodeSystem: Prosthesis 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Prosthesis | *Version*:2.14.2 |
| Active as of 2022-10-07 | *Computable Name*:Prosthesis |

 
Prosthesis 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ProteseDSR](ValueSet-ProteseDSR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Prosthesis",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Prosthesis",
  "version" : "2.14.2",
  "name" : "Prosthesis",
  "title" : "Prosthesis",
  "status" : "active",
  "date" : "2022-10-07T00:00:00+02:00",
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
  "description" : "Prosthesis",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 34,
  "concept" : [
    {
      "code" : "arthrex_eclipse",
      "display" : "Arthrex: Eclipse",
      "definition" : "Arthrex: Eclipse"
    },
    {
      "code" : "arthrex_universe",
      "display" : "Arthrex: Universe",
      "definition" : "Arthrex: Universe"
    },
    {
      "code" : "biomet_comprehensive_fraktur",
      "display" : "Biomet: Comprehensive - Fraktur",
      "definition" : "Biomet: Comprehensive - Fraktur"
    },
    {
      "code" : "biomet_comprehensive_nano",
      "display" : "Biomet: Comprehensive - Nano",
      "definition" : "Biomet: Comprehensive - Nano"
    },
    {
      "code" : "biomet_comprehensive_reverse",
      "display" : "Biomet: Comprehensive - Reverse",
      "definition" : "Biomet: Comprehensive - Reverse"
    },
    {
      "code" : "biomet_comprehensive_standard",
      "display" : "Biomet: Comprehensive - Standard",
      "definition" : "Biomet: Comprehensive - Standard"
    },
    {
      "code" : "biomet_copeland",
      "display" : "Biomet: Copeland",
      "definition" : "Biomet: Copeland"
    },
    {
      "code" : "depuy_delta_extend",
      "display" : "Depuy: Delta - Extend",
      "definition" : "Depuy: Delta - Extend"
    },
    {
      "code" : "depuy_global_advantage",
      "display" : "Depuy: Global - Advantage",
      "definition" : "Depuy: Global - Advantage"
    },
    {
      "code" : "depuy_global_cap",
      "display" : "Depuy: Global - C.A.P",
      "definition" : "Depuy: Global - C.A.P"
    },
    {
      "code" : "depuy_global_fx_fraktur",
      "display" : "Depuy: Global - FX (fraktur)",
      "definition" : "Depuy: Global - FX (fraktur)"
    },
    {
      "code" : "depuy_global_unite",
      "display" : "Depuy: Global - Unite",
      "definition" : "Depuy: Global - Unite"
    },
    {
      "code" : "exactech_equinoxe_fracture",
      "display" : "Exactech: Equinoxe - Fracture",
      "definition" : "Exactech: Equinoxe - Fracture"
    },
    {
      "code" : "exactech_equinoxe_primary",
      "display" : "Exactech: Equinoxe - Primary",
      "definition" : "Exactech: Equinoxe - Primary"
    },
    {
      "code" : "exactech_equinoxe_reversed",
      "display" : "Exactech: Equinoxe - Reversed",
      "definition" : "Exactech: Equinoxe - Reversed"
    },
    {
      "code" : "lima_smr_anatomic",
      "display" : "Lima SMR: Anatomic",
      "definition" : "Lima SMR: Anatomic"
    },
    {
      "code" : "lima_smr_fracture",
      "display" : "Lima SMR: Fracture",
      "definition" : "Lima SMR: Fracture"
    },
    {
      "code" : "lima_smr_resurfacing",
      "display" : "Lima SMR: Resurfacing",
      "definition" : "Lima SMR: Resurfacing"
    },
    {
      "code" : "lima_smr_reverse",
      "display" : "Lima SMR: Reverse",
      "definition" : "Lima SMR: Reverse"
    },
    {
      "code" : "lima_smr_stemless",
      "display" : "Lima SMR: Stemless",
      "definition" : "Lima SMR: Stemless"
    },
    {
      "code" : "smith&nephew_neer_3",
      "display" : "Smith & Nephew: Neer 3",
      "definition" : "Smith & Nephew: Neer 3"
    },
    {
      "code" : "tornier_aequalis_fracture",
      "display" : "Tornier: Aequalis - Fracture",
      "definition" : "Tornier: Aequalis - Fracture"
    },
    {
      "code" : "tornier_aequalis_resurfacing",
      "display" : "Tornier: Aequalis - Resurfacing",
      "definition" : "Tornier: Aequalis - Resurfacing"
    },
    {
      "code" : "tornier_aequalis_reverse",
      "display" : "Tornier: Aequalis - Reverse",
      "definition" : "Tornier: Aequalis - Reverse"
    },
    {
      "code" : "tornier_aequalis_standard",
      "display" : "Tornier: Aequalis - Standard",
      "definition" : "Tornier: Aequalis - Standard"
    },
    {
      "code" : "tornier_ascend_flex",
      "display" : "Tornier: Ascend Flex",
      "definition" : "Tornier: Ascend Flex"
    },
    {
      "code" : "tornier_simpliciti",
      "display" : "Tornier: Simpliciti",
      "definition" : "Tornier: Simpliciti"
    },
    {
      "code" : "zimmer_anatomical_fracture",
      "display" : "Zimmer: Anatomical - Fracture",
      "definition" : "Zimmer: Anatomical - Fracture"
    },
    {
      "code" : "zimmer_anatomical_reverse",
      "display" : "Zimmer: Anatomical - Reverse",
      "definition" : "Zimmer: Anatomical - Reverse"
    },
    {
      "code" : "zimmer_anatomical_shoulder_combined",
      "display" : "Zimmer: Anatomical - Shoulder Combined",
      "definition" : "Zimmer: Anatomical - Shoulder Combined"
    },
    {
      "code" : "zimmer_anatomical_standard",
      "display" : "Zimmer: Anatomical - Standard",
      "definition" : "Zimmer: Anatomical - Standard"
    },
    {
      "code" : "zimmer_bigliani_flatow",
      "display" : "Zimmer: Bigliani-Flatow",
      "definition" : "Zimmer: Bigliani-Flatow"
    },
    {
      "code" : "zimmer_sidus",
      "display" : "Zimmer: Sidus",
      "definition" : "Zimmer: Sidus"
    },
    {
      "code" : "zimmer_tm_reverse",
      "display" : "Zimmer: TM Reverse",
      "definition" : "Zimmer: TM Reverse"
    }
  ]
}

```
