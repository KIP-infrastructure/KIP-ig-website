# Hernie størrelse - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Hernie størrelse**

## ValueSet: Hernie størrelse (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/HernieStoerrelse | *Version*:2.16.0 |
| Active as of 2022-07-20 | *Computable Name*:HernieStoerrelse |

 
Hernie størrelse 

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
  "id" : "HernieStoerrelse",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/HernieStoerrelse",
  "version" : "2.16.0",
  "name" : "HernieStoerrelse",
  "title" : "Hernie størrelse",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-07-20T00:00:00+02:00",
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
  "description" : "Hernie størrelse",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/HerniaSize",
        "concept" : [
          {
            "code" : "<1",
            "display" : "<1 finger"
          },
          {
            "code" : "1",
            "display" : "1 finger"
          },
          {
            "code" : "2",
            "display" : "2 fingre"
          },
          {
            "code" : ">=3",
            "display" : ">=3 fingre"
          }
        ]
      },
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
        "concept" : [
          {
            "code" : "UNK",
            "display" : "Ukendt"
          }
        ]
      }
    ]
  }
}

```
