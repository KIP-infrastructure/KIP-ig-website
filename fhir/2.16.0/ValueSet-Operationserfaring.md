# Operationserfaring - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operationserfaring**

## ValueSet: Operationserfaring (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Operationserfaring | *Version*:2.16.0 |
| Active as of 2024-02-14 | *Computable Name*:Operationserfaring |

 
Operationserfaring for operatører og assistenter 

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
  "id" : "Operationserfaring",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Operationserfaring",
  "version" : "2.16.0",
  "name" : "Operationserfaring",
  "title" : "Operationserfaring",
  "status" : "active",
  "experimental" : true,
  "date" : "2024-02-14T00:00:00+02:00",
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
  "description" : "Operationserfaring for operatører og assistenter",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Operationserfaring",
        "concept" : [
          {
            "code" : "1",
            "display" : "A (0-10)"
          },
          {
            "code" : "2",
            "display" : "B (11-25)"
          },
          {
            "code" : "3",
            "display" : "C (26-50)"
          },
          {
            "code" : "4",
            "display" : "D (51-75)"
          },
          {
            "code" : "5",
            "display" : "E (76-100)"
          },
          {
            "code" : "6",
            "display" : "F (>100)"
          }
        ]
      }
    ]
  }
}

```
