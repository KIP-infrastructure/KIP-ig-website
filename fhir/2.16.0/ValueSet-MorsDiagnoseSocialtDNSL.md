# Mors Diagnosekode - Socialt (DNSL) - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mors Diagnosekode - Socialt (DNSL)**

## ValueSet: Mors Diagnosekode - Socialt (DNSL) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MorsDiagnoseSocialtDNSL | *Version*:2.16.0 |
| Active as of 2024-01-10 | *Computable Name*:MorsDiagnoseSocialtDNSL |

 
Mors Diagnosekode - Socialt (DNSL) 

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
  "id" : "MorsDiagnoseSocialtDNSL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MorsDiagnoseSocialtDNSL",
  "version" : "2.16.0",
  "name" : "MorsDiagnoseSocialtDNSL",
  "title" : "Mors Diagnosekode - Socialt (DNSL)",
  "status" : "active",
  "experimental" : true,
  "date" : "2024-01-10T00:00:00+02:00",
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
  "description" : "Mors Diagnosekode - Socialt (DNSL)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MorsDiagnosekoder",
        "concept" : [
          {
            "code" : "DN199",
            "display" : "DN199: Uræmi uden specifikation"
          },
          {
            "code" : "DZ915",
            "display" : "DZ915: Selvpåført skade"
          }
        ]
      }
    ]
  }
}

```
