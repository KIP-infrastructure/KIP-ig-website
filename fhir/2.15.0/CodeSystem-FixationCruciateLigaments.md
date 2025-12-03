# Fixation for cruciate ligaments (femur and tibia); types of screws - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Fixation for cruciate ligaments (femur and tibia); types of screws**

## CodeSystem: Fixation for cruciate ligaments (femur and tibia); types of screws 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/FixationCruciateLigaments | *Version*:2.15.0 |
| Active as of 2025-03-04 | *Computable Name*:FixationCruciateLigaments |

 
Fixation for cruciate ligaments (femur and tibia), types of screws 

 This Code system is referenced in the content logical definition of the following value sets: 

* [FiksationFemurDKRR](ValueSet-FiksationFemurDKRR.md)
* [FiksationFemurDKRR202503](ValueSet-FiksationFemurDKRR202503.md)
* [FiksationTibiaDKRR](ValueSet-FiksationTibiaDKRR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "FixationCruciateLigaments",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/FixationCruciateLigaments",
  "version" : "2.15.0",
  "name" : "FixationCruciateLigaments",
  "title" : "Fixation for cruciate ligaments (femur and tibia); types of screws",
  "status" : "active",
  "date" : "2025-03-04T00:00:00+02:00",
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
  "description" : "Fixation for cruciate ligaments (femur and tibia), types of screws",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 66,
  "property" : [
    {
      "code" : "comment",
      "uri" : "http://hl7.org/fhir/concept-properties#comment",
      "description" : "A string that provides additional detail pertinent to the use or understanding of the concept",
      "type" : "string"
    },
    {
      "code" : "effectiveDate",
      "uri" : "http://hl7.org/fhir/concept-properties#effectiveDate",
      "description" : "The date at which the concept status was last changed",
      "type" : "dateTime"
    },
    {
      "code" : "status",
      "uri" : "http://hl7.org/fhir/concept-properties#status",
      "description" : "A code that indicates the status of the concept. Typical values are active, experimental, deprecated, and retired",
      "type" : "code"
    },
    {
      "code" : "inactive",
      "uri" : "http://hl7.org/fhir/concept-properties#inactive",
      "description" : "True if the concept is not considered active - e.g. not a valid concept any more. Property type is boolean, default value is false. Note that the status property may also be used to indicate that a concept is inactive",
      "type" : "boolean"
    }
  ],
  "concept" : [
    {
      "code" : "arthrek_biotenodesis_plla",
      "display" : "Arthrex Biotenodesis PLLA skrue",
      "definition" : "Arthrex Biotenodesis PLLA skrue [Tibia]"
    },
    {
      "code" : "arthrek_plla_retro",
      "display" : "Arthrex PLLA retro-skrue",
      "definition" : "Arthrex PLLA retro-skrue [Tibia]"
    },
    {
      "code" : "arthrek_plla",
      "display" : "Arthrex PLLA skrue",
      "definition" : "Arthrex PLLA skrue [Tibia]"
    },
    {
      "code" : "arthrek_titanium",
      "display" : "Arthrex Titanium skrue",
      "definition" : "Arthrex Titanium skrue [Tibia]"
    },
    {
      "code" : "arthrex_biotenodesis_plla",
      "display" : "Arthrex Biotenodesis PLLA skrue",
      "definition" : "Arthrex Biotenodesis PLLA skrue [Femur]"
    },
    {
      "code" : "arthrex_delta",
      "display" : "Arthrex Deltaskrue",
      "definition" : "Arthrex Deltaskrue [Tibia]"
    },
    {
      "code" : "arthrex_graftbolt",
      "display" : "Arthrex GraftBolt",
      "definition" : "Arthrex GraftBolt [Tibia]"
    },
    {
      "code" : "arthrex_peek",
      "display" : "Arthrex PEEK Skrue",
      "definition" : "Arthrex PEEK Skrue [Femur + Tibia]"
    },
    {
      "code" : "arthrex_plla",
      "display" : "Arthrex PLLA skrue",
      "definition" : "Arthrex PLLA skrue [Femur]"
    },
    {
      "code" : "arthrex_retrobutton",
      "display" : "Arthrex Retrobutton",
      "definition" : "Arthrex Retrobutton [Femur]"
    },
    {
      "code" : "arthrex_tight_rope",
      "display" : "Arthrex Tight Rope",
      "definition" : "Arthrex Tight Rope [Femur + Tibia]"
    },
    {
      "code" : "arthrex_titanium",
      "display" : "Arthrex Titanium skrue",
      "definition" : "Arthrex Titanium skrue [Femur]"
    },
    {
      "code" : "arthrex_transfix",
      "display" : "Arthrex Transfix",
      "definition" : "Arthrex Transfix [Femur]"
    },
    {
      "code" : "arthrocare_bilok_trans",
      "display" : "Arthrocare Bilok Trans-skrue",
      "definition" : "Arthrocare Bilok Trans-skrue [Femur]"
    },
    {
      "code" : "atlantech_bilok",
      "display" : "Atlantech Bilok Skrue",
      "definition" : "Atlantech Bilok Skrue [Femur + Tibia]"
    },
    {
      "code" : "atlantech_cobra",
      "display" : "Atlantech Cobra",
      "definition" : "Atlantech Cobra [Tibia]"
    },
    {
      "code" : "atlantech_metal",
      "display" : "Atlantech metal skrue",
      "definition" : "Atlantech metal skrue [Femur + Tibia]"
    },
    {
      "code" : "biomet_centraloc",
      "display" : "Biomet Centraloc",
      "definition" : "Biomet Centraloc [Tibia]"
    },
    {
      "code" : "biomet_ez_loc",
      "display" : "Biomet EZ Loc",
      "definition" : "Biomet EZ Loc [Femur]"
    },
    {
      "code" : "biomet_metal_tunneloc",
      "display" : "Biomet metal skrue (Tunneloc)",
      "definition" : "Biomet metal skrue (Tunneloc) [Femur + Tibia]"
    },
    {
      "code" : "biomet_peek_tibia_nail_tunneloc",
      "display" : "Biomet peek tibia nail (Tunneloc)",
      "definition" : "Biomet peek tibia nail (Tunneloc) [Tibia]"
    },
    {
      "code" : "biomet_plla_gentlethread",
      "display" : "Biomet PLLA skrue (Gentletread)",
      "definition" : "Biomet PLLA skrue (Gentletread) [Femur + Tibia]"
    },
    {
      "code" : "biomet_togglelock_zipploop",
      "display" : "Biomet Togglelock Zipploop",
      "definition" : "Biomet Togglelock Zipploop [Femur]"
    },
    {
      "code" : "biomet_washerloc",
      "display" : "Biomet Washerloc",
      "definition" : "Biomet Washerloc [Tibia]"
    },
    {
      "code" : "cayenne_aperfix",
      "display" : "Cayenne Aperfix",
      "definition" : "Cayenne Aperfix [Femur + Tibia]"
    },
    {
      "code" : "conmed_guardsman",
      "display" : "ConMed Guardsman metal",
      "definition" : "ConMed Guardsman metal [Femur]"
    },
    {
      "code" : "conmed_martryx",
      "display" : "ConMed Martryx",
      "definition" : "ConMed Martryx [Tibia]"
    },
    {
      "code" : "conmed_metal_propel",
      "display" : "ConMed Metal skrue (Propel)",
      "definition" : "ConMed Metal skrue (Propel) [Femur + Tibia]"
    },
    {
      "code" : "conmed_plla_bioscrew",
      "display" : "ConMed PLLA skrue (Bioscrew)",
      "definition" : "ConMed PLLA skrue (Bioscrew) [Femur + Tibia]"
    },
    {
      "code" : "conmed_xo_button",
      "display" : "ConMed XO Button",
      "definition" : "ConMed XO Button [Femur]"
    },
    {
      "code" : "depuy_milagro_advance_peek",
      "display" : "Depuy Milagro ADVANCE PEEK",
      "definition" : "Depuy Milagro ADVANCE PEEK [Tibia]"
    },
    {
      "code" : "depuy_mitek_femoral_intrafix",
      "display" : "Depuy Mitek Femoral Intrafix",
      "definition" : "Depuy Mitek Femoral Intrafix [Femur]"
    },
    {
      "code" : "depuy_mitek_intrafix",
      "display" : "Depuy Mitek Intrafix",
      "definition" : "Depuy Mitek Intrafix [Tibia]"
    },
    {
      "code" : "depuy_mitek_intrafix_bio",
      "display" : "Depuy Mitek Intrafix Bio",
      "definition" : "Depuy Mitek Intrafix Bio [Tibia]"
    },
    {
      "code" : "depuy_mitek_milagro",
      "display" : "Depuy Mitek Milagro skrue",
      "definition" : "Depuy Mitek Milagro skrue [Femur + Tibia]"
    },
    {
      "code" : "depuy_mitek_rigidfix",
      "display" : "Depuy Mitek Rigidfix",
      "definition" : "Depuy Mitek Rigidfix [Femur]"
    },
    {
      "code" : "depuy_mitek_titanium",
      "display" : "Depuy Mitek Titanium skrue",
      "definition" : "Depuy Mitek Titanium skrue [Femur + Tibia]"
    },
    {
      "code" : "depuy_rigidfix_curve",
      "display" : "Depuy Rigidfix CURVE",
      "definition" : "Depuy Rigidfix CURVE [Femur]"
    },
    {
      "code" : "depuy_rigidloop_adjustable",
      "display" : "Depuy Rigidloop Adjustable",
      "definition" : "Depuy Rigidloop Adjustable [Tibia]"
    },
    {
      "code" : "depuy_rigidloop_adjustable_loop",
      "display" : "Depuy RIGIDLOOP adjustable loop",
      "definition" : "Depuy RIGIDLOOP adjustable loop [Femur]"
    },
    {
      "code" : "depuy_rigidloop_fixed_loop",
      "display" : "Depuy RIGIDLOOP fixed loop",
      "definition" : "Depuy RIGIDLOOP fixed loop [Femur]"
    },
    {
      "code" : "femoral_intrafix",
      "display" : "Femoral Intrafix",
      "definition" : "Femoral Intrafix [Femur]"
    },
    {
      "code" : "inion_hexalon",
      "display" : "Inion Hexalon skrue",
      "definition" : "Inion Hexalon skrue [Femur + Tibia]"
    },
    {
      "code" : "intrafix_advance",
      "display" : "Intrafix Advance",
      "definition" : "Intrafix Advance [Tibia]"
    },
    {
      "code" : "kramper",
      "display" : "Kramper",
      "definition" : "Kramper [Tibia]"
    },
    {
      "code" : "smith&nephew_biosure_peek",
      "display" : "Smith & Nephew Biosure PEEK skrue",
      "definition" : "Smith & Nephew Biosure PEEK skrue [Femur + Tibia]"
    },
    {
      "code" : "smith&nephew_biosure_regensorb",
      "display" : "Smith & Nephew Biosure Regensorb",
      "definition" : "Smith & Nephew Biosure Regensorb [Tibia]"
    },
    {
      "code" : "smith&nephew_calaxo",
      "display" : "Smith & Nephew Calaxo",
      "definition" : "Smith & Nephew Calaxo [Femur]"
    },
    {
      "code" : "smith&nephew_endobutton_cl",
      "display" : "Smith & Nephew Endobutton CL",
      "definition" : "Smith & Nephew Endobutton CL [Femur]"
    },
    {
      "code" : "smith&nephew_rci_calaxo",
      "display" : "Smith & Nephew RCI Calaxo",
      "definition" : "Smith & Nephew RCI Calaxo [Tibia]"
    },
    {
      "code" : "smith&nephew_rci_metal",
      "display" : "Smith & Nephew RCI metal",
      "definition" : "Smith & Nephew RCI metal [Femur + Tibia]"
    },
    {
      "code" : "smith&nephew_rci_plla",
      "display" : "Smith & Nephew RCI PLLA",
      "definition" : "Smith & Nephew RCI PLLA [Femur + Tibia]"
    },
    {
      "code" : "smith&nephew_rci_plla/ha",
      "display" : "Smith & Nephew RCI PLLA/HA",
      "definition" : "Smith & Nephew RCI PLLA/HA [Femur + Tibia]"
    },
    {
      "code" : "smith&nephew_softsilk_metal",
      "display" : "Smith & Nephew Softsilk metal",
      "definition" : "Smith & Nephew Softsilk metal [Femur + Tibia]"
    },
    {
      "code" : "smith&nephew_ultrabutton",
      "display" : "Smith & Nephew UltraButton",
      "definition" : "Smith & Nephew UltraButton [Femur]"
    },
    {
      "code" : "storz_flip-tac",
      "display" : "Storz Flip-Tac",
      "definition" : "Storz Flip-Tac [Femur]"
    },
    {
      "code" : "storz_megafix",
      "display" : "Storz Megafix",
      "definition" : "Storz Megafix [Tibia]"
    },
    {
      "code" : "stryker_bioosteon",
      "display" : "Stryker Bioosteon skrue",
      "definition" : "Stryker Bioosteon skrue [Femur + Tibia]"
    },
    {
      "code" : "stryker_crossscrew_ha/plla",
      "display" : "Stryker Crossscrew (HA/PLLA)",
      "definition" : "Stryker Crossscrew (HA/PLLA) [Femur + Tibia]"
    },
    {
      "code" : "stryker_crossscrew_titanium",
      "display" : "Stryker Crossscrew (Titanium)",
      "definition" : "Stryker Crossscrew (Titanium) [Femur + Tibia]"
    },
    {
      "code" : "stryker_plla",
      "display" : "Stryker PLLA skrue",
      "definition" : "Stryker PLLA skrue [Femur + Tibia]"
    },
    {
      "code" : "stryker_procinch",
      "display" : "Stryker ProCinch",
      "definition" : "Stryker ProCinch [Femur + Tibia]",
      "property" : [
        {
          "code" : "comment",
          "valueString" : "Added"
        },
        {
          "code" : "effectiveDate",
          "valueDateTime" : "2025-04-03T00:00:00+01:00"
        },
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "inactive",
          "valueBoolean" : false
        }
      ]
    },
    {
      "code" : "stryker_titanium",
      "display" : "Stryker titanium skrue",
      "definition" : "Stryker titanium skrue [Femur + Tibia]"
    },
    {
      "code" : "stryker_versitomic_g-lok",
      "display" : "Stryker VersiTomic G-lok",
      "definition" : "Stryker VersiTomic G-lok [Femur]"
    },
    {
      "code" : "bona_canal",
      "display" : "Knoglekanal",
      "definition" : "Knoglekanal [Tibia]"
    },
    {
      "code" : "screw/washer",
      "display" : "Skrue/washer",
      "definition" : "Skrue/washer [Femur + Tibia]"
    }
  ]
}

```
