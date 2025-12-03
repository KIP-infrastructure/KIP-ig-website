# Operativ adgang (DKR) - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operativ adgang (DKR)**

## ValueSet: Operativ adgang (DKR) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OperativAdgangDKR | *Version*:2.15.0 |
| Active as of 2022-10-14 | *Computable Name*:OperativAdgangDKR |

 
Operativ adgang (DKR) 

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
  "id" : "OperativAdgangDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OperativAdgangDKR",
  "version" : "2.15.0",
  "name" : "OperativAdgangDKR",
  "title" : "Operativ adgang (DKR)",
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
  "description" : "Operativ adgang (DKR)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/IncisionChoice",
        "concept" : [
          {
            "code" : "medial_for_patella",
            "display" : "Medial for patella"
          },
          {
            "code" : "lateral_for_patella",
            "display" : "Lateral for patella"
          }
        ]
      }
    ]
  }
}

```
