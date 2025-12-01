# SKS: cTNM klassifikation, cN - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SKS: cTNM klassifikation, cN**

## ValueSet: SKS: cTNM klassifikation, cN (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SKScTNMcN | *Version*:2.14.2 |
| Active as of 2022-06-08 | *Computable Name*:SKScTNMcN |

 
SKS koderne relevante cN tillægskoder 

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
  "id" : "SKScTNMcN",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SKScTNMcN",
  "version" : "2.14.2",
  "name" : "SKScTNMcN",
  "title" : "SKS: cTNM klassifikation, cN",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-06-08T00:00:00+02:00",
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
  "description" : "SKS koderne relevante cN tillægskoder",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
        "concept" : [
          {
            "code" : "AZCD30",
            "display" : "cN0: Ingen regionale lymfeknudemetastaser"
          },
          {
            "code" : "AZCD31",
            "display" : "cN1: Regional lymfeknudemetastase"
          },
          {
            "code" : "AZCD32",
            "display" : "cN2: Regional lymfeknudemetastase"
          },
          {
            "code" : "AZCD33",
            "display" : "cN3: Regional lymfeknudemetastase"
          },
          {
            "code" : "AZCD39",
            "display" : "cNx: Opl om regional lymfeknudestatus foreligger ikke i afd"
          }
        ]
      }
    ]
  }
}

```
