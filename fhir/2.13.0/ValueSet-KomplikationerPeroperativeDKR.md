# Komplikationer, peroperative (DKR) - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komplikationer, peroperative (DKR)**

## ValueSet: Komplikationer, peroperative (DKR) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomplikationerPeroperativeDKR | *Version*:2.13.0 |
| Active as of 2022-10-14 | *Computable Name*:KomplikationerPeroperativeDKR |

 
Komplikationer, peroperative (DKR) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 5 concepts

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
  "id" : "KomplikationerPeroperativeDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomplikationerPeroperativeDKR",
  "version" : "2.13.0",
  "name" : "KomplikationerPeroperativeDKR",
  "title" : "Komplikationer, peroperative (DKR)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-10-14T00:00:00+02:00",
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
  "description" : "Komplikationer, peroperative (DKR)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/BasicDisorder",
        "concept" : [
          {
            "code" : "fracture_patella",
            "display" : "Patellafraktur"
          },
          {
            "code" : "fracture_tibia",
            "display" : "Tibiafraktur"
          },
          {
            "code" : "fracture_femur",
            "display" : "Femurfraktur"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
        "concept" : [
          {
            "code" : "rupture_patella_ligament",
            "display" : "Ruptur af patellasene"
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
