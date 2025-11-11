# Medical fixation and closing - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Medical fixation and closing**

## CodeSystem: Medical fixation and closing 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/MedicalFixationClosing | *Version*:2.13.0 |
| Active as of 2022-07-20 | *Computable Name*:MedicalFixationClosing |

 
Medical fixation and closing 

 This Code system is referenced in the content logical definition of the following value sets: 

* [LimnavnDHDB](ValueSet-LimnavnDHDB.md)
* [LukningHudDHDB](ValueSet-LukningHudDHDB.md)
* [MeshFikseringDHDB](ValueSet-MeshFikseringDHDB.md)
* [PeritonealdefektLukningDHDB](ValueSet-PeritonealdefektLukningDHDB.md)
* [SuturHurtigResorberbarMonoDHDB](ValueSet-SuturHurtigResorberbarMonoDHDB.md)
* [SuturHurtigResorberbarMultiDHDB](ValueSet-SuturHurtigResorberbarMultiDHDB.md)
* [SuturLangsomResorberbarMonoDHDB](ValueSet-SuturLangsomResorberbarMonoDHDB.md)
* [SuturMaterialeVentralhernieDHDB](ValueSet-SuturMaterialeVentralhernieDHDB.md)
* [SuturMonofilamentTypeVentralhernieDHDB](ValueSet-SuturMonofilamentTypeVentralhernieDHDB.md)
* [SuturNonResorberbarMonoDHDB](ValueSet-SuturNonResorberbarMonoDHDB.md)
* [SuturNonResorberbarMultiDHDB](ValueSet-SuturNonResorberbarMultiDHDB.md)
* [SuturTypeDHDB](ValueSet-SuturTypeDHDB.md)
* [SuturTypeVentralhernieDHDB](ValueSet-SuturTypeVentralhernieDHDB.md)
* [TackernavnAbsorberbarDHDB](ValueSet-TackernavnAbsorberbarDHDB.md)
* [TackernavnNonAbsorberbarDHDB](ValueSet-TackernavnNonAbsorberbarDHDB.md)
* [TackertypeDHDB](ValueSet-TackertypeDHDB.md)

This case-insensitive code system `https://kip.rkkp.dk/fhir/CodeSystem/MedicalFixationClosing` provides **a fragment** that includes following codes in an undefined hierarchy:



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MedicalFixationClosing",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/MedicalFixationClosing",
  "version" : "2.13.0",
  "name" : "MedicalFixationClosing",
  "title" : "Medical fixation and closing",
  "status" : "active",
  "date" : "2022-07-20T00:00:00+02:00",
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
  "description" : "Medical fixation and closing",
  "caseSensitive" : false,
  "content" : "fragment",
  "concept" : [
    {
      "code" : "suture",
      "display" : "Suture",
      "definition" : "Suture / Sutur / SNODMED-CT: 408099007",
      "concept" : [
        {
          "code" : "not_self_locking",
          "display" : "Not self-locking",
          "definition" : "Not self-locking / Ikke selvlåsende"
        },
        {
          "code" : "self_locking",
          "display" : "Self-locking",
          "definition" : "Self-locking / Selvlåsende",
          "concept" : [
            {
              "code" : "v_loc",
              "display" : "Self-locking (V-LOC)",
              "definition" : "Self-locking (V-LOC) / Selflåsende (V-LOC)"
            },
            {
              "code" : "stratafix",
              "display" : "Self-locking (Stratafix)",
              "definition" : "Self-locking (Stratafix) / Selflåsende (Stratafix)"
            }
          ]
        },
        {
          "code" : "multifilament",
          "display" : "Multifilament",
          "definition" : "Multifilament",
          "concept" : [
            {
              "code" : "ethibond",
              "display" : "Ethibond",
              "definition" : "Ethibond"
            },
            {
              "code" : "mersilene",
              "display" : "Mersilene",
              "definition" : "Mersilene"
            },
            {
              "code" : "vicryl",
              "display" : "Vicryl",
              "definition" : "Vicryl"
            }
          ]
        },
        {
          "code" : "monofilament",
          "display" : "Monofilament",
          "definition" : "Monofilament",
          "concept" : [
            {
              "code" : "pds",
              "display" : "PDS",
              "definition" : "PDS"
            },
            {
              "code" : "dexon",
              "display" : "Dexon",
              "definition" : "Dexon"
            },
            {
              "code" : "maxon",
              "display" : "Maxon",
              "definition" : "Maxon"
            },
            {
              "code" : "monocryl",
              "display" : "Monocryl",
              "definition" : "Monocryl"
            },
            {
              "code" : "monoplus",
              "display" : "MonoPlus",
              "definition" : "MonoPlus"
            },
            {
              "code" : "momomax",
              "display" : "MonoMax",
              "definition" : "MonoMax"
            },
            {
              "code" : "nylon",
              "display" : "Nylon",
              "definition" : "Nylon"
            },
            {
              "code" : "prolene",
              "display" : "Prolene",
              "definition" : "Prolene"
            }
          ]
        },
        {
          "code" : "fast_resorbable",
          "display" : "Fast resorbable",
          "definition" : "Fast resorbable / Hurtig resorberbar"
        },
        {
          "code" : "slow_resorbable",
          "display" : "Slow resorbable",
          "definition" : "Slow resorbable / Langsom resorberbar"
        },
        {
          "code" : "non_resorbable",
          "display" : "Non resorbable",
          "definition" : "Non resorbable / Non-resorberbar"
        },
        {
          "code" : "intracutaneous",
          "display" : "Intracutaneous",
          "definition" : "Intracutaneous / Intrakutan"
        },
        {
          "code" : "not_intracutaneous",
          "display" : "Not intracutaneous",
          "definition" : "Not intracutaneous / Ikke intrakutan"
        }
      ]
    },
    {
      "code" : "tack",
      "display" : "Tack",
      "definition" : "Tack / SNOMED-CT: 705723004",
      "concept" : [
        {
          "code" : "absorbable",
          "display" : "Absorbable",
          "definition" : "Absorbable / Absorberbar",
          "concept" : [
            {
              "code" : "absorbatack",
              "display" : "Absorbatack",
              "definition" : "Absorbatack"
            },
            {
              "code" : "optifix",
              "display" : "Optifix",
              "definition" : "Optifix"
            },
            {
              "code" : "reliatack",
              "display" : "Reliatack",
              "definition" : "Reliatack"
            },
            {
              "code" : "securestrap",
              "display" : "Securestrap",
              "definition" : "Securestrap"
            }
          ]
        },
        {
          "code" : "non_absorbable",
          "display" : "Non-absorbable",
          "definition" : "Non-absorbable / Non-absorberbar",
          "concept" : [
            {
              "code" : "capsure",
              "display" : "Capsure",
              "definition" : "Capsure"
            },
            {
              "code" : "protack",
              "display" : "Protack",
              "definition" : "Protack"
            }
          ]
        }
      ]
    },
    {
      "code" : "clip",
      "display" : "Clip",
      "definition" : "Clip / Clip / SNOMED-CT: 77720000"
    },
    {
      "code" : "surgical_glue",
      "display" : "Surgical glue",
      "definition" : "Surgical glue / Kirurgisk lim / SNOMED-CT: 303532007",
      "concept" : [
        {
          "code" : "histoacryl",
          "display" : "Histoacryl",
          "definition" : "Histoacryl"
        },
        {
          "code" : "tisseel",
          "display" : "Tisseel",
          "definition" : "Tisseel"
        }
      ]
    },
    {
      "code" : "self_fixative_mesh",
      "display" : "Self-fixative mesh",
      "definition" : "Self-fixative mesh / Selvfikserende mesh"
    },
    {
      "code" : "surgical_staple",
      "display" : "Surgical staple",
      "definition" : "Surgical staple / Kirurgisk hæfteklamme / SNOMED-CT: 386014009"
    },
    {
      "code" : "combi_fixation",
      "display" : "Combined fixation methods",
      "definition" : "Kombinerede fiksationer",
      "concept" : [
        {
          "code" : "tack_sutur",
          "display" : "Tack + suture",
          "definition" : "Tack + sutur"
        },
        {
          "code" : "glue_sutur",
          "display" : "Glue + suture",
          "definition" : "Lim + sutur"
        },
        {
          "code" : "glue_tack_clip",
          "display" : "Glue + tack/clip",
          "definition" : "Lim + Tack/clips"
        }
      ]
    }
  ]
}

```
