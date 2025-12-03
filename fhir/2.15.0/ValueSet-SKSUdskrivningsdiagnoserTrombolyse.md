# SKS: Udskrivningsiagnoser for Trombolyse (DAP) - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SKS: Udskrivningsiagnoser for Trombolyse (DAP)**

## ValueSet: SKS: Udskrivningsiagnoser for Trombolyse (DAP) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SKSUdskrivningsdiagnoserTrombolyse | *Version*:2.15.0 |
| Active as of 2022-06-28 | *Computable Name*:SKSUdskrivningsdiagnoserTrombolyse |

 
SKS koderne relevante for Trombolyse (DAP) 

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
  "id" : "SKSUdskrivningsdiagnoserTrombolyse",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SKSUdskrivningsdiagnoserTrombolyse",
  "version" : "2.15.0",
  "name" : "SKSUdskrivningsdiagnoserTrombolyse",
  "title" : "SKS: Udskrivningsiagnoser for Trombolyse (DAP)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-06-28T00:00:00+02:00",
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
  "description" : "SKS koderne relevante for Trombolyse (DAP)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
        "concept" : [
          {
            "code" : "DI630",
            "display" : "DI630 - Hjerneinfarkt forårsaget af trombose i præcerebral arterie"
          },
          {
            "code" : "DI631",
            "display" : "DI631 - Hjerneinfarkt forårsaget af emboli i præcerebral arterie"
          },
          {
            "code" : "DI632",
            "display" : "DI632 - Hjerneinfarkt forårsaget af tillukning eller stenose i præcerebral arterie UNS"
          },
          {
            "code" : "DI633",
            "display" : "DI633 - Hjerneinfarkt forårsaget af trombose i cerebral arterie"
          },
          {
            "code" : "DI634",
            "display" : "DI634 - Hjerneinfarkt forårsaget af emboli i cerebral arterie"
          },
          {
            "code" : "DI635",
            "display" : "DI635 - Hjerneinfarkt forårsaget af tillukning eller stenose i cerebral arterie UNS"
          },
          {
            "code" : "DI638",
            "display" : "DI638 - Anden form for hjerneinfarkt"
          },
          {
            "code" : "DI639",
            "display" : "DI639 - Hjerneinfarkt UNS"
          }
        ]
      }
    ]
  }
}

```
