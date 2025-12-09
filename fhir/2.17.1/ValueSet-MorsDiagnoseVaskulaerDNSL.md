# Mors Diagnosekode - Vaskulær (DNSL) - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mors Diagnosekode - Vaskulær (DNSL)**

## ValueSet: Mors Diagnosekode - Vaskulær (DNSL) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MorsDiagnoseVaskulaerDNSL | *Version*:2.17.1 |
| Active as of 2024-01-10 | *Computable Name*:MorsDiagnoseVaskulaerDNSL |

 
Mors Diagnosekode - Vaskulære årsager (DNSL) 

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
  "id" : "MorsDiagnoseVaskulaerDNSL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MorsDiagnoseVaskulaerDNSL",
  "version" : "2.17.1",
  "name" : "MorsDiagnoseVaskulaerDNSL",
  "title" : "Mors Diagnosekode - Vaskulær (DNSL)",
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
  "description" : "Mors Diagnosekode - Vaskulære årsager (DNSL)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MorsDiagnosekoder",
        "concept" : [
          {
            "code" : "DD629",
            "display" : "DD629: Akut anæmi efter blødning"
          },
          {
            "code" : "DI269",
            "display" : "DI269: Embolia pulmonis u akut cor pulmonale"
          },
          {
            "code" : "DI649",
            "display" : "DI649: Apoplexia cerebri uden specifikation"
          },
          {
            "code" : "DI772",
            "display" : "DI772: Ruptura arteriae"
          },
          {
            "code" : "DK550",
            "display" : "DK550: Akut karsygdom i tarm"
          },
          {
            "code" : "DK638C",
            "display" : "DK638C: Haemorrhagia tractus gastrointestinalis"
          },
          {
            "code" : "DR589",
            "display" : "DR589: Haemorrhagia uden specifikation"
          },
          {
            "code" : "DT810",
            "display" : "DT810: Haemorrhagia postop et haematoma postop ikke klas ansted"
          },
          {
            "code" : "DT824",
            "display" : "DT824: Complicatio katherisationis vasorum dialyseos"
          }
        ]
      }
    ]
  }
}

```
