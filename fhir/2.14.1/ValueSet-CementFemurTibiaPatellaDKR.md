# Cement - femur, tibia og patella (DKR) - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cement - femur, tibia og patella (DKR)**

## ValueSet: Cement - femur, tibia og patella (DKR) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/CementFemurTibiaPatellaDKR | *Version*:2.14.1 |
| Active as of 2022-10-13 | *Computable Name*:CementFemurTibiaPatellaDKR |

 
Cement - femur, tibia og patella (DKR) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 18 concepts

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
  "id" : "CementFemurTibiaPatellaDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/CementFemurTibiaPatellaDKR",
  "version" : "2.14.1",
  "name" : "CementFemurTibiaPatellaDKR",
  "title" : "Cement - femur, tibia og patella (DKR)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-10-13T00:00:00+02:00",
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
  "description" : "Cement - femur, tibia og patella (DKR)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/CementType",
        "concept" : [
          {
            "code" : "biomet_cement_lv",
            "display" : "Biomet: Bone Cement LV"
          },
          {
            "code" : "biomet_cement_r",
            "display" : "Biomet: Bone Cement R"
          },
          {
            "code" : "biomet_cement_v",
            "display" : "Biomet: Bone Cement V"
          },
          {
            "code" : "biomet_cement_plus",
            "display" : "Biomet: Plus Bone Cement"
          },
          {
            "code" : "cmw1",
            "display" : "CMW I"
          },
          {
            "code" : "cmw2",
            "display" : "CMW II"
          },
          {
            "code" : "cmw3",
            "display" : "CMW III"
          },
          {
            "code" : "lvc_standard",
            "display" : "LVC-standard"
          },
          {
            "code" : "palacos",
            "display" : "Palacos"
          },
          {
            "code" : "palacos_low",
            "display" : "Palacos low"
          },
          {
            "code" : "refobacin_cement_lv",
            "display" : "Refobacin: Bone Cement LV"
          },
          {
            "code" : "refobacin_cement_r",
            "display" : "Refobacin: Bone Cement R"
          },
          {
            "code" : "refobacin_cement_plus",
            "display" : "Refobacin: Plus Bone Cement"
          },
          {
            "code" : "refobacin_revision",
            "display" : "Refobacin: Revision"
          },
          {
            "code" : "simplex",
            "display" : "Simplex"
          },
          {
            "code" : "smartset",
            "display" : "SmartSet"
          },
          {
            "code" : "sulfix",
            "display" : "Sulfix"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "other",
            "display" : "Anden cement med eller uden antibiotika"
          }
        ]
      }
    ]
  }
}

```
