# EDTA koder Peritonedialyse (DNSL) - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EDTA koder Peritonedialyse (DNSL)**

## ValueSet: EDTA koder Peritonedialyse (DNSL) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/EDTAPeritonedialyseDNSL | *Version*:2.14.1 |
| Active as of 2024-01-31 | *Computable Name*:EDTAPeritonedialyseDNSL |

 
EDTA koder Peritonedialyse (DNSL) 

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
  "id" : "EDTAPeritonedialyseDNSL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/EDTAPeritonedialyseDNSL",
  "version" : "2.14.1",
  "name" : "EDTAPeritonedialyseDNSL",
  "title" : "EDTA koder Peritonedialyse (DNSL)",
  "status" : "active",
  "experimental" : true,
  "date" : "2024-01-31T00:00:00+02:00",
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
  "description" : "EDTA koder Peritonedialyse (DNSL)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/EDTACodes",
        "concept" : [
          {
            "code" : "EDTA30",
            "display" : "EDTA 30, IPD-dialyse (hospital)"
          },
          {
            "code" : "EDTA40",
            "display" : "EDTA 40, CAPD-dialyse"
          },
          {
            "code" : "EDTA41",
            "display" : "EDTA 41, APD-dialyse"
          },
          {
            "code" : "EDTA45",
            "display" : "EDTA 45, Blandet PDHD-dialyse"
          },
          {
            "code" : "EDTA46a",
            "display" : "EDTA46a, Assisteret CAPD (kun professionel)"
          },
          {
            "code" : "EDTA46b",
            "display" : "EDTA46b, Assisteret APD (kun professionel)"
          }
        ]
      }
    ]
  }
}

```
