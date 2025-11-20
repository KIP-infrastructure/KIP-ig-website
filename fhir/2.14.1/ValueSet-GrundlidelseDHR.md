# Grundlidelse [DHR] - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Grundlidelse [DHR]**

## ValueSet: Grundlidelse [DHR] (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/GrundlidelseDHR | *Version*:2.14.1 |
| Active as of 2022-07-04 | *Computable Name*:GrundlidelseDHR |

 
Grundlidelse [DHR] 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 16 concepts

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
  "id" : "GrundlidelseDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/GrundlidelseDHR",
  "version" : "2.14.1",
  "name" : "GrundlidelseDHR",
  "title" : "Grundlidelse [DHR]",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-07-04T00:00:00+02:00",
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
  "description" : "Grundlidelse [DHR]",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/BasicDisorder",
        "concept" : [
          {
            "code" : "arthrosis",
            "display" : "Primær (idiopatisk) artrose"
          },
          {
            "code" : "femoral_no_operation",
            "display" : "Prox femurfraktur: uden OP (tidl ostesyntese eller hemi)"
          },
          {
            "code" : "femoral_previous_operation",
            "display" : "Prox femurfraktur: med tidl. OP (osteosyntese eller hemi)"
          },
          {
            "code" : "acetabulum_fracture",
            "display" : "Acetabulumfraktur"
          },
          {
            "code" : "traumatic",
            "display" : "Traumatisk hofteluksation"
          },
          {
            "code" : "caputnecrosis",
            "display" : "Atraumatisk caputnekrose"
          },
          {
            "code" : "rheumatoid",
            "display" : "Reumatoid artrit"
          },
          {
            "code" : "mb_bechterew",
            "display" : "Mb. Bechterew"
          },
          {
            "code" : "other_arthritis",
            "display" : "Anden artrit"
          },
          {
            "code" : "congenital",
            "display" : "Kongenit hofteluksation"
          },
          {
            "code" : "mb_calve_legg_perthes",
            "display" : "Mb. Calvé-Legg-Perthes"
          },
          {
            "code" : "epiphysiolysis",
            "display" : "Epifysiolyse"
          },
          {
            "code" : "acetabulum_dysplasia",
            "display" : "Acetabulumdysplasi"
          },
          {
            "code" : "primary_tumor",
            "display" : "Primær tumor"
          },
          {
            "code" : "metastases",
            "display" : "Metastaser"
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
