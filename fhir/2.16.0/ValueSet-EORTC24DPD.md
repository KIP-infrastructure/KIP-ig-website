# EORTC Grad 2-4 (DPD) - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EORTC Grad 2-4 (DPD)**

## ValueSet: EORTC Grad 2-4 (DPD) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/EORTC24DPD | *Version*:2.16.0 |
| Active as of 2022-10-24 | *Computable Name*:EORTC24DPD |

 
EORTC Grad 2-4 - Helbredsvurdering (DPD) 

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
  "id" : "EORTC24DPD",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/EORTC24DPD",
  "version" : "2.16.0",
  "name" : "EORTC24DPD",
  "title" : "EORTC Grad 2-4 (DPD)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-10-24T00:00:00+02:00",
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
  "description" : "EORTC Grad 2-4 - Helbredsvurdering (DPD)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/EORTCQLQC1514",
        "concept" : [
          {
            "code" : "grade_2",
            "display" : "2. Lidt"
          },
          {
            "code" : "grade_3",
            "display" : "3. En del"
          },
          {
            "code" : "grade_4",
            "display" : "4. Meget"
          }
        ]
      }
    ]
  }
}

```
