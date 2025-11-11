# ICD 10 non-cancer koder til DPD - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ICD 10 non-cancer koder til DPD**

## ValueSet: ICD 10 non-cancer koder til DPD (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/IDC10DPDNonCancer | *Version*:2.13.0 |
| Active as of 2022-08-25 | *Computable Name*:IDC10DPDNonCancer |

 
ICD 10 non-cancer koder til DPD 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 6 concepts

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
  "id" : "IDC10DPDNonCancer",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/IDC10DPDNonCancer",
  "version" : "2.13.0",
  "name" : "IDC10DPDNonCancer",
  "title" : "ICD 10 non-cancer koder til DPD",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-08-25T00:00:00+02:00",
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
  "description" : "ICD 10 non-cancer koder til DPD",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKSCodeCollection",
        "concept" : [
          {
            "code" : "heart_vessel",
            "display" : "Hjertekar sygdom (DI00-DI52+DI70-DI99)"
          },
          {
            "code" : "neurological",
            "display" : "Neurologisk sygdom (ikke apopleksi) (DI64-DI69+DG00-DG99+DF00-DF03)"
          },
          {
            "code" : "apoplexia",
            "display" : "Apopleksi (cerebral thrombose/hæmorrhagi) (DI60-DI63)"
          },
          {
            "code" : "lung",
            "display" : "Lungesygdomme (DJ00-DJ99+DE84)"
          },
          {
            "code" : "kidney",
            "display" : "Nyresygdomme (DN00-DN29)"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "other",
            "display" : "Anden sygdom"
          }
        ]
      }
    ]
  }
}

```
