# POP-Q undersøgelse Ba (DUGA) - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **POP-Q undersøgelse Ba (DUGA)**

## ValueSet: POP-Q undersøgelse Ba (DUGA) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/POPQBaDUGA | *Version*:2.17.1 |
| Active as of 2024-02-13 | *Computable Name*:POPQBaDUGA |

 
Nedsynkning - POP-Q undersøgelse Ba (DUGA) 

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
  "id" : "POPQBaDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/POPQBaDUGA",
  "version" : "2.17.1",
  "name" : "POPQBaDUGA",
  "title" : "POP-Q undersøgelse Ba (DUGA)",
  "status" : "active",
  "experimental" : true,
  "date" : "2024-02-13T00:00:00+02:00",
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
  "description" : "Nedsynkning - POP-Q undersøgelse Ba (DUGA)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/IntervalsExact",
        "concept" : [
          {
            "code" : "m3",
            "display" : "-3"
          },
          {
            "code" : "m2-5",
            "display" : "-2,5"
          },
          {
            "code" : "m2",
            "display" : "-2"
          },
          {
            "code" : "m1-5",
            "display" : "-1,5"
          },
          {
            "code" : "m1",
            "display" : "-1"
          },
          {
            "code" : "m0-5",
            "display" : "-0,5"
          },
          {
            "code" : "0",
            "display" : "0"
          },
          {
            "code" : "0-5",
            "display" : "0,5"
          },
          {
            "code" : "1",
            "display" : "1"
          },
          {
            "code" : "1-5",
            "display" : "1,5"
          },
          {
            "code" : "2",
            "display" : "2"
          },
          {
            "code" : "2-5",
            "display" : "2,5"
          },
          {
            "code" : "3",
            "display" : "3"
          },
          {
            "code" : "3-5",
            "display" : "3,5"
          },
          {
            "code" : "4",
            "display" : "4"
          },
          {
            "code" : "4-5",
            "display" : "4,5"
          },
          {
            "code" : "5",
            "display" : "5"
          },
          {
            "code" : "5-5",
            "display" : "5,5"
          },
          {
            "code" : "6",
            "display" : "6"
          },
          {
            "code" : "6-5",
            "display" : "6,5"
          },
          {
            "code" : "7",
            "display" : "7"
          },
          {
            "code" : "7-5",
            "display" : "7,5"
          },
          {
            "code" : "8",
            "display" : "8"
          },
          {
            "code" : "8-5",
            "display" : "8,5"
          },
          {
            "code" : "9",
            "display" : "9"
          }
        ]
      }
    ]
  }
}

```
