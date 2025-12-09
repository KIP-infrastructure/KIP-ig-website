# Behandlingsindikation (KAR) - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Behandlingsindikation (KAR)**

## ValueSet: Behandlingsindikation (KAR) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/BehandlingsindikationKAR | *Version*:2.17.1 |
| Active as of 2022-09-27 | *Computable Name*:BehandlingsindikationKAR |

 
Behandlingsindikation (KAR) 

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
  "id" : "BehandlingsindikationKAR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/BehandlingsindikationKAR",
  "version" : "2.17.1",
  "name" : "BehandlingsindikationKAR",
  "title" : "Behandlingsindikation (KAR)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-09-27T00:00:00+02:00",
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
  "description" : "Behandlingsindikation (KAR)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DiseasesUnspecified",
        "concept" : [
          {
            "code" : "acute_extremity_ischaemia",
            "display" : "akut ekstremitetsiskæmi"
          },
          {
            "code" : "amurosis_fugax",
            "display" : "amaurosis fugax"
          },
          {
            "code" : "aneurysm_asymptomatic",
            "display" : "aneurisme - asymptomatisk"
          },
          {
            "code" : "aneurysm_symptomatic",
            "display" : "aneurisme - symptomatisk"
          },
          {
            "code" : "aneurysm_ruptured",
            "display" : "aneurisme - rumperet"
          },
          {
            "code" : "aneurysm_clotted",
            "display" : "aneurisme - tromboseret"
          },
          {
            "code" : "aneurysm_pseudo",
            "display" : "aneurisme - pseudo"
          },
          {
            "code" : "aneurysm_mycotic",
            "display" : "aneurisme - mykotisk"
          },
          {
            "code" : "bleeding",
            "display" : "blødning / hæmatom"
          },
          {
            "code" : "infection",
            "display" : "infektion (ikke proteseinfektion = 55)"
          },
          {
            "code" : "intestinal_ischaemia",
            "display" : "intestinal iskæmi, angina abdominalis"
          },
          {
            "code" : "function_dependent_ischaemia",
            "display" : "funktionsbetinget iskæmi, claudicatio intermittens"
          },
          {
            "code" : "chronic_ischaemia_rest_pain",
            "display" : "kronisk iskæmi - hvilesmerter"
          },
          {
            "code" : "chronic_ischaemia_wound",
            "display" : "kronisk iskæmi - sår"
          },
          {
            "code" : "chronic_ischaemia_gangrene",
            "display" : "kronisk iskæmi - gangræn"
          },
          {
            "code" : "hypertension_renovascular",
            "display" : "renovaskulær hypertension"
          },
          {
            "code" : "stroke",
            "display" : "stroke"
          },
          {
            "code" : "tos",
            "display" : "thoracic outlet syndrom (TOS)"
          },
          {
            "code" : "tia",
            "display" : "transitorisk iskæmisk attack (TIA)"
          },
          {
            "code" : "trauma",
            "display" : "traume"
          },
          {
            "code" : "thrombosis_vascular_reconstruction",
            "display" : "trombose af karrekonstruktion"
          },
          {
            "code" : "uremia",
            "display" : "uræmi"
          },
          {
            "code" : "varices",
            "display" : "varicer"
          },
          {
            "code" : "vasospasms",
            "display" : "vasospasme/ Raynaud"
          },
          {
            "code" : "venus_thrombosis",
            "display" : "venetrombose"
          },
          {
            "code" : "reconstruction_failure",
            "display" : "truende rekonstruktionssvigt"
          },
          {
            "code" : "permanent_central_venous_access",
            "display" : "permanent central venøs adgang"
          },
          {
            "code" : "wound_complication",
            "display" : "sårkomplikation"
          },
          {
            "code" : "fascial_rupture",
            "display" : "fascieruptur"
          },
          {
            "code" : "ileus",
            "display" : "ileus"
          },
          {
            "code" : "intestine_ischaemia",
            "display" : "tarmiskæmi"
          },
          {
            "code" : "aorto/prosthesis_intestinal_fistula",
            "display" : "aorto/protese-instestinal fistel"
          },
          {
            "code" : "prosthetic_infection",
            "display" : "proteseinfektion"
          },
          {
            "code" : "extremity_compartment",
            "display" : "ekstremittets kompartment"
          },
          {
            "code" : "prolonged_intubation",
            "display" : "langvarig intubation"
          },
          {
            "code" : "retroperitoneal_fibrosis",
            "display" : "retroperitoneal fibrose"
          },
          {
            "code" : "abdominal_compartment",
            "display" : "abdominal kompartment"
          },
          {
            "code" : "entrapment",
            "display" : "entrapment"
          },
          {
            "code" : "emergency_aortic_dissection",
            "display" : "akut aortadissektion"
          },
          {
            "code" : "chronic_aortic_dissection",
            "display" : "kronisk aortadissektion"
          },
          {
            "code" : "dissection_unspecified",
            "display" : "dissektion uden nærmere specifikation"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "other",
            "display" : "anden indikation"
          }
        ]
      }
    ]
  }
}

```
