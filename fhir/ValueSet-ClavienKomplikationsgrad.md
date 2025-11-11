# Clavien komplikationsgrad - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Clavien komplikationsgrad**

## ValueSet: Clavien komplikationsgrad (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ClavienKomplikationsgrad | *Version*:2.13.0 |
| Active as of 2022-10-04 | *Computable Name*:ClavienKomplikationsgrad |

 
Clavien komplikationsgrad 

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
  "id" : "ClavienKomplikationsgrad",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ClavienKomplikationsgrad",
  "version" : "2.13.0",
  "name" : "ClavienKomplikationsgrad",
  "title" : "Clavien komplikationsgrad",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-10-04T00:00:00+02:00",
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
  "description" : "Clavien komplikationsgrad",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
        "concept" : [
          {
            "code" : "ZDA03A1",
            "display" : "Clavien grad 1"
          },
          {
            "code" : "ZDA03A2",
            "display" : "Clavien grad 2"
          },
          {
            "code" : "ZDA03A3",
            "display" : "Clavien grad 3"
          },
          {
            "code" : "ZDA03A3A",
            "display" : "Clavien grad 3a"
          },
          {
            "code" : "ZDA03A3B",
            "display" : "Clavien grad 3b"
          },
          {
            "code" : "ZDA03A4",
            "display" : "Clavien grad 4"
          },
          {
            "code" : "ZDA03A4A",
            "display" : "Clavien grad 4a"
          },
          {
            "code" : "ZDA03A4B",
            "display" : "Clavien grad 4b"
          },
          {
            "code" : "ZDA03A5",
            "display" : "Clavien grad 5"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "none",
            "display" : "Ingen"
          }
        ]
      }
    ]
  }
}

```
