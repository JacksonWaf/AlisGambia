
INSERT INTO `unhls_financial_years` (`id`, `year`) VALUES (1, '2022/2023');
-- ALTER TABLE `unhls_tests`  ADD `instrument_id` INT  AFTER `instrument`,  ADD `method_used` VARCHAR(60) NULL;
INSERT INTO `referral_reasons` (`id`, `reason`) VALUES
(1, 'Equipment break down'),
(2, 'Reagent stock out'),
(3, 'Supplies stock out'),
(4, 'Power outage'),
(5, 'No testing expertise'),
(6, 'Lack of required equipment'),
(7, 'Confirmatory testing'),
(8, 'For QA re-testing'),
(9, 'others');

-- when using lookupSSS

INSERT INTO `look_ups` (`id`, `name`, `description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES (NULL, 'Treatment Line', 'Treatment Line', '1', NULL, '2019-09-15 21:00:00', '2019-09-15 21:00:00');

INSERT INTO `look_up_values` ( `look_up_id`,`value`, `value_description`) VALUES
(5,'1', '1C=AZT-3TC-NVP'),
(5,'2', '1D=AZT-3TC-EFV'),
(5,'3', '1E=TDF-3TC-NVP'),
(5,'4', '1F=TDF-3TC-EFV'),
(5,'5', '.'),
(5,'6', '1H=ABC+3TC+NVP'),
(5,'7', '1I=ABC-3TC-EFV'),
(5,'8', '1J=ABC-3TC-NVP'),
(5,'11', '2B=TDF-3TC-LPV/R'),
(5,'12', '2C=AZT+3TC+ATV/R'),
(5,'13', '2E=AZT-3TC-LPV/R'),
(5,'14', '2F=TDF+3TC+ATV/R'),
(5,'15', '2G=ABC-3TC-LPV/R'),
(5,'16', '2H=ABC+3TC+ATV/R'),
(5,'17', '2I=ABC-3TC-LPV/R'),
(5,'18', '2J=AZT+3TC+DTG'),
(5,'19', '4A=d4T-3TC-NVP'),
(5,'20', '4B=d4T-3TC-EFV'),
(5,'21', '4C=AZT-3TC-NVP'),
(5,'22', '4D=AZT-3TC-EFV'),
(5,'23', '4E=ABC-3TC-NVP'),
(5,'24', '4F=ABC-3TC-EFV'),
(5,'25', '5D=TDF-3TC-LPV/R'),
(5,'26', '5E=TDF-FTC-LPV/R'),
(5,'27', '5G=AZT-ABC-LPV/R');


INSERT INTO `look_up_values` ( `look_up_id`,`value`, `value_description`) VALUES
(7, '1', 'First Line'),
(7, '2', 'Second Line'),
(7, '4', 'Left Blank'),
(7, '5', 'Other Regimen'),
(7, '3', 'Third Line');
