# Årsag til ophør (DNSL) - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Årsag til ophør (DNSL)**

## ValueSet: Årsag til ophør (DNSL) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AarsagOphoerDNSL | *Version*:2.13.0 |
| Active as of 2024-01-10 | *Computable Name*:AarsagOphoerDNSL |

 
Årsager til interventionsforløb er ophørt 

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
  "id" : "AarsagOphoerDNSL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AarsagOphoerDNSL",
  "version" : "2.13.0",
  "name" : "AarsagOphoerDNSL",
  "title" : "Årsag til ophør (DNSL)",
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
  "description" : "Årsager til interventionsforløb er ophørt",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/BehandlingAfbrudt",
        "concept" : [
          {
            "code" : "transplant",
            "display" : "Transplantation"
          },
          {
            "code" : "peritonitis",
            "display" : "Peritonitis"
          },
          {
            "code" : "ultrafilt_svigt",
            "display" : "Ultrafiltrationssvigt"
          },
          {
            "code" : "inadekvat_dialyse",
            "display" : "Inadekvat dialyse"
          },
          {
            "code" : "hernia",
            "display" : "Hernia (inkl Diafragma)"
          },
          {
            "code" : "teknisk",
            "display" : "Teknisk (fx kateterproblem)"
          },
          {
            "code" : "anden_medicinsk",
            "display" : "Andre medicinske årsager (fx apopleksi)"
          },
          {
            "code" : "patient_valg",
            "display" : "Patient valg"
          },
          {
            "code" : "socialt",
            "display" : "Socialt"
          },
          {
            "code" : "abdominal_op",
            "display" : "Abdominal operation"
          }
        ]
      }
    ]
  }
}

```
