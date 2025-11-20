# Mors Diagnosekode - Lever (DNSL) - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mors Diagnosekode - Lever (DNSL)**

## ValueSet: Mors Diagnosekode - Lever (DNSL) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MorsDiagnoseLeverDNSL | *Version*:2.14.1 |
| Active as of 2024-01-10 | *Computable Name*:MorsDiagnoseLeverDNSL |

 
Mors Diagnosekode - Leverlidelser (DNSL) 

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
  "id" : "MorsDiagnoseLeverDNSL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MorsDiagnoseLeverDNSL",
  "version" : "2.14.1",
  "name" : "MorsDiagnoseLeverDNSL",
  "title" : "Mors Diagnosekode - Lever (DNSL)",
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
  "description" : "Mors Diagnosekode - Leverlidelser (DNSL)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MorsDiagnosekoder",
        "concept" : [
          {
            "code" : "DB181",
            "display" : "DB181: Hepatitis B viralis Chronica u Delta agens"
          },
          {
            "code" : "DB182",
            "display" : "DB182: Hepatitis C viralis chronica"
          },
          {
            "code" : "DB188",
            "display" : "DB188: Hepatitis viralis Chronica alia"
          },
          {
            "code" : "DK719",
            "display" : "DK719: Toksisk leversygdom uden specifikation"
          },
          {
            "code" : "DK729",
            "display" : "DK729: Leversvigt uden specifikation"
          },
          {
            "code" : "DK746",
            "display" : "DK746: Cirrhosis hepatis, anden og uden specifikation"
          },
          {
            "code" : "DQ446",
            "display" : "DQ446: Hepar cysticum congenitum"
          }
        ]
      }
    ]
  }
}

```
