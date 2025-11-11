# ECOG Performance Status Skala til HÆMA specialerne - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ECOG Performance Status Skala til HÆMA specialerne**

## ValueSet: ECOG Performance Status Skala til HÆMA specialerne (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ECOGHAEMA | *Version*:2.13.0 |
| Active as of 2022-07-08 | *Computable Name*:ECOGHAEMA |

 
Denne ECOG er specifik udarbejdet til HÆMA specialerne 

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
  "id" : "ECOGHAEMA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ECOGHAEMA",
  "version" : "2.13.0",
  "name" : "ECOGHAEMA",
  "title" : "ECOG Performance Status Skala til HÆMA specialerne",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-07-08T00:00:00+02:00",
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
  "description" : "Denne ECOG er specifik udarbejdet til HÆMA specialerne",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/PerformanceStatusScore",
        "concept" : [
          {
            "code" : "grade_0",
            "display" : "0: Fuldt daglig aktiv"
          },
          {
            "code" : "grade_1",
            "display" : "1: Oppegående"
          },
          {
            "code" : "grade_2",
            "display" : "2: Sengeliggende mindre end 50%"
          },
          {
            "code" : "grade_3",
            "display" : "3: Sengeliggende mere end 50%"
          },
          {
            "code" : "grade_4",
            "display" : "4: 100% Sengeliggende"
          }
        ]
      }
    ]
  }
}

```
