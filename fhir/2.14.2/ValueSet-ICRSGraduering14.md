# ICRS graduering 1-4 - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ICRS graduering 1-4**

## ValueSet: ICRS graduering 1-4 (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ICRSGraduering14 | *Version*:2.14.2 |
| Active as of 2022-09-19 | *Computable Name*:ICRSGraduering14 |

 
ICRS graduering 1-4 

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
  "id" : "ICRSGraduering14",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ICRSGraduering14",
  "version" : "2.14.2",
  "name" : "ICRSGraduering14",
  "title" : "ICRS graduering 1-4",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-09-19T00:00:00+02:00",
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
  "description" : "ICRS graduering 1-4",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ICRSGradingSystem",
        "concept" : [
          {
            "code" : "grade_1",
            "display" : "Grad 1: Overfladisk brusklæsion"
          },
          {
            "code" : "grade_2",
            "display" : "Grad 2: Brusklæsion < 50% af brusktykkelse"
          },
          {
            "code" : "grade_3",
            "display" : "Grad 3: Større end 50% af brusktykkelsen"
          },
          {
            "code" : "grade_4",
            "display" : "Grad 4: Blottet knogle eller osteokondral læsion"
          }
        ]
      }
    ]
  }
}

```
