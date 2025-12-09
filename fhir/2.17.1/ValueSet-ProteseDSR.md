# Protese (DSR) - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Protese (DSR)**

## ValueSet: Protese (DSR) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ProteseDSR | *Version*:2.17.1 |
| Active as of 2022-10-07 | *Computable Name*:ProteseDSR |

 
Protese (DSR) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ProteseDSR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ProteseDSR",
  "version" : "2.17.1",
  "name" : "ProteseDSR",
  "title" : "Protese (DSR)",
  "status" : "active",
  "experimental" : true,
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
  "description" : "Protese (DSR)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Prosthesis",
        "concept" : [
          {
            "code" : "arthrex_eclipse",
            "display" : "Arthrex: Eclipse"
          },
          {
            "code" : "arthrex_universe",
            "display" : "Arthrex: Universe"
          },
          {
            "code" : "biomet_comprehensive_fraktur",
            "display" : "Biomet: Comprehensive - Fraktur"
          },
          {
            "code" : "biomet_comprehensive_nano",
            "display" : "Biomet: Comprehensive - Nano"
          },
          {
            "code" : "biomet_comprehensive_reverse",
            "display" : "Biomet: Comprehensive - Reverse"
          },
          {
            "code" : "biomet_comprehensive_standard",
            "display" : "Biomet: Comprehensive - Standard"
          },
          {
            "code" : "biomet_copeland",
            "display" : "Biomet: Copeland"
          },
          {
            "code" : "depuy_delta_extend",
            "display" : "Depuy: Delta - Extend"
          },
          {
            "code" : "depuy_global_advantage",
            "display" : "Depuy: Global - Advantage"
          },
          {
            "code" : "depuy_global_cap",
            "display" : "Depuy: Global - C.A.P"
          },
          {
            "code" : "depuy_global_fx_fraktur",
            "display" : "Depuy: Global - FX (fraktur)"
          },
          {
            "code" : "depuy_global_unite",
            "display" : "Depuy: Global - Unite"
          },
          {
            "code" : "exactech_equinoxe_fracture",
            "display" : "Exactech: Equinoxe - Fracture"
          },
          {
            "code" : "exactech_equinoxe_primary",
            "display" : "Exactech: Equinoxe - Primary"
          },
          {
            "code" : "exactech_equinoxe_reversed",
            "display" : "Exactech: Equinoxe - Reversed"
          },
          {
            "code" : "lima_smr_anatomic",
            "display" : "Lima SMR: Anatomic"
          },
          {
            "code" : "lima_smr_fracture",
            "display" : "Lima SMR: Fracture"
          },
          {
            "code" : "lima_smr_resurfacing",
            "display" : "Lima SMR: Resurfacing"
          },
          {
            "code" : "lima_smr_reverse",
            "display" : "Lima SMR: Reverse"
          },
          {
            "code" : "lima_smr_stemless",
            "display" : "Lima SMR: Stemless"
          },
          {
            "code" : "smith&nephew_neer_3",
            "display" : "Smith & Nephew: Neer 3"
          },
          {
            "code" : "tornier_aequalis_fracture",
            "display" : "Tornier: Aequalis - Fracture"
          },
          {
            "code" : "tornier_aequalis_resurfacing",
            "display" : "Tornier: Aequalis - Resurfacing"
          },
          {
            "code" : "tornier_aequalis_reverse",
            "display" : "Tornier: Aequalis - Reverse"
          },
          {
            "code" : "tornier_aequalis_standard",
            "display" : "Tornier: Aequalis - Standard"
          },
          {
            "code" : "tornier_ascend_flex",
            "display" : "Tornier: Ascend Flex"
          },
          {
            "code" : "tornier_simpliciti",
            "display" : "Tornier: Simpliciti"
          },
          {
            "code" : "zimmer_anatomical_fracture",
            "display" : "Zimmer: Anatomical - Fracture"
          },
          {
            "code" : "zimmer_anatomical_reverse",
            "display" : "Zimmer: Anatomical - Reverse"
          },
          {
            "code" : "zimmer_anatomical_shoulder_combined",
            "display" : "Zimmer: Anatomical - Shoulder Combined"
          },
          {
            "code" : "zimmer_anatomical_standard",
            "display" : "Zimmer: Anatomical - Standard"
          },
          {
            "code" : "zimmer_bigliani_flatow",
            "display" : "Zimmer: Bigliani-Flatow"
          },
          {
            "code" : "zimmer_sidus",
            "display" : "Zimmer: Sidus"
          },
          {
            "code" : "zimmer_tm_reverse",
            "display" : "Zimmer: TM Reverse"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "other",
            "display" : "Anden"
          }
        ]
      }
    ]
  }
}

```
