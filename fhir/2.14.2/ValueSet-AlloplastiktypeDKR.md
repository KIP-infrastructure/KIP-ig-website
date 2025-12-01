# Alloplastiktype (DKR) - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Alloplastiktype (DKR)**

## ValueSet: Alloplastiktype (DKR) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AlloplastiktypeDKR | *Version*:2.14.2 |
| Active as of 2022-10-13 | *Computable Name*:AlloplastiktypeDKR |

 
Alloplastiktype (DKR) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 10 concepts

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
  "id" : "AlloplastiktypeDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AlloplastiktypeDKR",
  "version" : "2.14.2",
  "name" : "AlloplastiktypeDKR",
  "title" : "Alloplastiktype (DKR)",
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
  "description" : "Alloplastiktype (DKR)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AlloplastyTypes",
        "concept" : [
          {
            "code" : "total_alloplasty",
            "display" : "Totalalloplastik"
          },
          {
            "code" : "medial_unilateral_knee",
            "display" : "Medial UKA"
          },
          {
            "code" : "lateral_unitaleral_knee",
            "display" : "Lateral UKA"
          },
          {
            "code" : "patellofemoral_unitaleral_knee",
            "display" : "Patellofemoral UKA"
          },
          {
            "code" : "hinge_knee",
            "display" : "Roterende hængselalloplastik"
          },
          {
            "code" : "hinge_knee_resection",
            "display" : "Roterende hængselsalloplastik m. kondylresektion"
          },
          {
            "code" : "partial_resurfacing",
            "display" : "Partiel resurfacing"
          },
          {
            "code" : "cement_spacer_articulated",
            "display" : "Spacer, artikuleret"
          },
          {
            "code" : "cement_spacer_fixated",
            "display" : "Spacer, fikseret"
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
