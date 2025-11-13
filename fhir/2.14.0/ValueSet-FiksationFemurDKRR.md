# Fiksation, Femur (DKRR) - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Fiksation, Femur (DKRR)**

## ValueSet: Fiksation, Femur (DKRR) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/FiksationFemurDKRR | *Version*:2.14.0 |
| Active as of 2022-09-21 | *Computable Name*:FiksationFemurDKRR |

 
Fiksation, Femur (DKRR) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 46 concepts

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
  "id" : "FiksationFemurDKRR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/FiksationFemurDKRR",
  "version" : "2.14.0",
  "name" : "FiksationFemurDKRR",
  "title" : "Fiksation, Femur (DKRR)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-09-21T00:00:00+02:00",
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
  "description" : "Fiksation, Femur (DKRR)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/FixationCruciateLigaments",
        "concept" : [
          {
            "code" : "arthrex_biotenodesis_plla",
            "display" : "Arthrex Biotenodesis PLLA skrue"
          },
          {
            "code" : "arthrex_peek",
            "display" : "Arthrex PEEK Skrue"
          },
          {
            "code" : "arthrex_plla",
            "display" : "Arthrex PLLA skrue"
          },
          {
            "code" : "arthrex_retrobutton",
            "display" : "Arthrex Retrobutton"
          },
          {
            "code" : "arthrex_tight_rope",
            "display" : "Arthrex Tight Rope"
          },
          {
            "code" : "arthrex_titanium",
            "display" : "Arthrex Titanium skrue"
          },
          {
            "code" : "arthrex_transfix",
            "display" : "Arthrex Transfix"
          },
          {
            "code" : "arthrocare_bilok_trans",
            "display" : "Arthrocare Bilok Trans-skrue"
          },
          {
            "code" : "atlantech_bilok",
            "display" : "Atlantech Bilok Skrue"
          },
          {
            "code" : "atlantech_metal",
            "display" : "Atlantech metal skrue"
          },
          {
            "code" : "biomet_ez_loc",
            "display" : "Biomet EZ Loc"
          },
          {
            "code" : "biomet_metal_tunneloc",
            "display" : "Biomet metal skrue (Tunneloc)"
          },
          {
            "code" : "biomet_plla_gentlethread",
            "display" : "Biomet PLLA skrue (Gentletread)"
          },
          {
            "code" : "biomet_togglelock_zipploop",
            "display" : "Biomet Togglelock Zipploop"
          },
          {
            "code" : "cayenne_aperfix",
            "display" : "Cayenne Aperfix"
          },
          {
            "code" : "conmed_guardsman",
            "display" : "ConMed Guardsman metal"
          },
          {
            "code" : "conmed_metal_propel",
            "display" : "ConMed Metal skrue (Propel)"
          },
          {
            "code" : "conmed_plla_bioscrew",
            "display" : "ConMed PLLA skrue (Bioscrew)"
          },
          {
            "code" : "conmed_xo_button",
            "display" : "ConMed XO Button"
          },
          {
            "code" : "depuy_mitek_femoral_intrafix",
            "display" : "Depuy Mitek Femoral Intrafix"
          },
          {
            "code" : "depuy_mitek_milagro",
            "display" : "Depuy Mitek Milagro skrue"
          },
          {
            "code" : "depuy_mitek_rigidfix",
            "display" : "Depuy Mitek Rigidfix"
          },
          {
            "code" : "depuy_mitek_titanium",
            "display" : "Depuy Mitek Titanium skrue"
          },
          {
            "code" : "depuy_rigidfix_curve",
            "display" : "Depuy Rigidfix CURVE"
          },
          {
            "code" : "depuy_rigidloop_adjustable_loop",
            "display" : "Depuy RIGIDLOOP adjustable loop"
          },
          {
            "code" : "depuy_rigidloop_fixed_loop",
            "display" : "Depuy RIGIDLOOP fixed loop"
          },
          {
            "code" : "femoral_intrafix",
            "display" : "Femoral Intrafix"
          },
          {
            "code" : "inion_hexalon",
            "display" : "Inion Hexalon skrue"
          },
          {
            "code" : "smith&nephew_biosure_peek",
            "display" : "Smith & Nephew Biosure PEEK skrue"
          },
          {
            "code" : "smith&nephew_calaxo",
            "display" : "Smith & Nephew Calaxo"
          },
          {
            "code" : "smith&nephew_endobutton_cl",
            "display" : "Smith & Nephew Endobutton CL"
          },
          {
            "code" : "smith&nephew_rci_metal",
            "display" : "Smith & Nephew RCI metal"
          },
          {
            "code" : "smith&nephew_rci_plla",
            "display" : "Smith & Nephew RCI PLLA"
          },
          {
            "code" : "smith&nephew_rci_plla/ha",
            "display" : "Smith & Nephew RCI PLLA/HA"
          },
          {
            "code" : "smith&nephew_softsilk_metal",
            "display" : "Smith & Nephew Softsilk metal"
          },
          {
            "code" : "smith&nephew_ultrabutton",
            "display" : "Smith & Nephew UltraButton"
          },
          {
            "code" : "storz_flip-tac",
            "display" : "Storz Flip-Tac"
          },
          {
            "code" : "stryker_bioosteon",
            "display" : "Stryker Bioosteon skrue"
          },
          {
            "code" : "stryker_crossscrew_ha/plla",
            "display" : "Stryker Crossscrew (HA/PLLA)"
          },
          {
            "code" : "stryker_crossscrew_titanium",
            "display" : "Stryker Crossscrew (Titanium)"
          },
          {
            "code" : "stryker_plla",
            "display" : "Stryker PLLA skrue"
          },
          {
            "code" : "stryker_procinch",
            "display" : "Stryker ProCinch"
          },
          {
            "code" : "stryker_titanium",
            "display" : "Stryker titanium skrue"
          },
          {
            "code" : "stryker_versitomic_g-lok",
            "display" : "Stryker VersiTomic G-lok"
          },
          {
            "code" : "screw/washer",
            "display" : "Skrue/washer"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "other",
            "display" : "Andet"
          }
        ]
      }
    ]
  }
}

```
